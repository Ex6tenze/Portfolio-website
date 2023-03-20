import react from '@vitejs/plugin-react'

export default {
    plugins:
    [
        react()
    ],
    root: 'src/',
    publicDir: "../public/",
    base: 'https://bert0018.github.io/dist',
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