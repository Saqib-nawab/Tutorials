import express from 'express';
import { authenticateToken, authorizeRoles } from '../middleware/auth.js';

const router = express.Router();

router.get('/', authenticateToken, authorizeRoles('shop_owner', 'admin'), (req, res) => { //if authorizeRole is admin or shop_owner will be authorized
    res.send('Shop Owner Content');
});

export default router;
