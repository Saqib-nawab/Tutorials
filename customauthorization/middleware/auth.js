import jwt from 'jsonwebtoken';
import User from '../models/user.js';

// Middleware function to authenticate the JWT token
export function authenticateToken(req, res, next) {
    // Extract the token from the Authorization header
    const authHeader = req.headers.authorization;
    const token = authHeader && authHeader.split(' ')[1];

    // If no token is provided in authorization header, return 401 Unauthorized
    if (!token) {
        console.log('No token provided');
        return res.sendStatus(401);
    }

    // Verify the token using the secret key
    jwt.verify(token, process.env.ACCESS_TOKEN_SECRET, async (err, user) => {
        // If token verification fails, return 403 Forbidden
        if (err) {
            console.log('Token verification failed', err);
            return res.sendStatus(403);
        }

        // If token is valid, fetch the user from the database
        req.user = await User.findById(user.id);
        console.log('User authenticated:', req.user);

        // Proceed to the next middleware or route handler
        next();
    }); q
}

export function authorizeRoles(...roles) {
    return (req, res, next) => {
        if (!roles.includes(req.user.role)) {
            return res.status(403).json({ message: 'Access denied' });
        }
        next();
    };
}
