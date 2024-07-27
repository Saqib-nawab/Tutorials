import express from 'express';
import { authenticateToken, authorizeRoles } from '../middleware/auth.js';

const router = express.Router();

router.get('/', authenticateToken, authorizeRoles('user', 'shop_owner', 'admin'), (req, res) => {
    res.send('User Content');
});

export default router;
