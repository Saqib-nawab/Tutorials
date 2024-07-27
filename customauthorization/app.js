import express from "express";
import mongoose from 'mongoose';
import dotenv from 'dotenv';
import bcrypt from 'bcryptjs';
import jwt from 'jsonwebtoken';
import User from './models/user.js';
import adminRoutes from './routes/admin.js';
import shopRoutes from './routes/shop.js';
import userRoutes from './routes/user.js';

dotenv.config();

const app = express();
app.use(express.json());

mongoose.connect(process.env.MONGODB_URI, { useNewUrlParser: true, useUnifiedTopology: true });

app.post('/login', async (req, res) => {
    const { username, password } = req.body;
    const user = await User.findOne({ username });

    if (!user || !await bcrypt.compare(password, user.password)) {
        return res.status(401).json({ message: 'Invalid credentials' });
    }

    const token = jwt.sign({ id: user._id, role: user.role }, process.env.ACCESS_TOKEN_SECRET, { expiresIn: '1h' });
    res.json({ token });
});

app.use('/admin', adminRoutes);
app.use('/shop', shopRoutes);
app.use('/user', userRoutes);

const PORT = process.env.PORT || 3000;
app.listen(PORT, () => {
    console.log(`Server is running on port ${PORT}`);
});
