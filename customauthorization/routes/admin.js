import express from 'express';
import { authenticateToken, authorizeRoles } from '../middleware/auth.js';

const router = express.Router();

router.get('/', authenticateToken, authorizeRoles('admin'), (req, res) => {
    res.send('Admin Content');
});

export default router;
