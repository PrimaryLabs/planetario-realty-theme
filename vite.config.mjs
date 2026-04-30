import { defineConfig } from 'vite';

export default defineConfig({
  publicDir: false,
  build: {
    manifest: true,
    outDir: 'public/build',
    emptyOutDir: true,
    rollupOptions: {
      input: {
        app: 'resources/js/app.js',
      },
    },
  },
  server: {
    host: '127.0.0.1',
    port: 3000,
    strictPort: false,
    cors: {
      origin: [
        /^https?:\/\/planetario-realty\.loc$/,
        /^https?:\/\/localhost(?::\d+)?$/,
        /^https?:\/\/127\.0\.0\.1(?::\d+)?$/,
      ],
    },
    hmr: {
      host: '127.0.0.1',
      protocol: 'ws',
      clientPort: 3000,
    },
  },
});
