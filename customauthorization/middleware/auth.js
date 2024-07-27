import jwt from 'jsonwebtoken';
import User from '../models/user.js';

export function authenticateToken(req, res, next) {
    const authHeader = req.headers.authorization;
    const token = authHeader && authHeader.split(' ')[1];
    if (!token) {
        console.log('No token provided');
        return res.sendStatus(401);
    }

    jwt.verify(token, process.env.ACCESS_TOKEN_SECRET, async (err, user) => {
        if (err) {
            console.log('Token verification failed', err);
            return res.sendStatus(403);
        }
        req.user = await User.findById(user.id);
        console.log('User authenticated:', req.user);
        next();
    });
}

export function authorizeRoles(...roles) {
    return (req, res, next) => {
        if (!roles.includes(req.user.role)) {
            return res.status(403).json({ message: 'Access denied' });
        }
        next();
    };
}
