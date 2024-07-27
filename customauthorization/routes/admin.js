import express from 'express';
import { authenticateToken, authorizeRoles } from '../middleware/auth.js';

const router = express.Router();

router.get('/', authenticateToken, authorizeRoles('admin'), (req, res) => { //if authorizeRole is admin among the following will be authorized
    res.send('Admin Content');
});

export default router;
