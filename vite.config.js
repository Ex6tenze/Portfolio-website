import react from '@vitejs/plugin-react'

export default {
    plugins:
    [
        react()
    ],
    root: 'src/',
    publicDir: "../public/",
    base: 'https://ex6tenze.github.io/Portfolio-website/',
    server:
    {
        host: true
    },
    build:
    {
        outDir: '../dist',
        emptyOutDir: true,
        sourcemap: true
    }
}