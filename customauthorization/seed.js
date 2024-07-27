import mongoose from 'mongoose';
import bcrypt from 'bcryptjs';
import dotenv from 'dotenv';
import User from './models/user.js';

dotenv.config();

mongoose.connect(process.env.MONGODB_URI, { useNewUrlParser: true, useUnifiedTopology: true })
    .then(() => console.log('Database connected'))
    .catch(err => console.log(err));

const seedUsers = async () => {
    await User.deleteMany({});

    const hashedPassword = await bcrypt.hash('password123', 10);

    const users = [
        { username: 'admin', password: hashedPassword, role: 'admin' },
        { username: 'shopowner', password: hashedPassword, role: 'shop_owner' },
        { username: 'user', password: hashedPassword, role: 'user' }
    ];

    await User.insertMany(users);
    console.log('Users seeded');
    mongoose.connection.close();
};

seedUsers().catch(error => console.error(error));
