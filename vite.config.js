import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    // server: {
    //     host: '192.168.1.124', // ตั้งค่าให้ใช้ IP ที่แชร์
    //     strictPort: true,
    //     cors: true, // ✅ เปิด CORS
    //     hmr: {
    //         protocol: 'ws', // ใช้ WebSocket แทน HTTP
    //         host: '192.168.1.124',
    //     }
    // },
    
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
