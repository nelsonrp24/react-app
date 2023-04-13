module.exports = {
    branches: "master",
    repositoryUrl:"https://github.com/nelsonrp24/react-app",
    plugins: [
        '@semantic-release/commit-analyzer', 
        '@semantic-release/release-notes-generator', 
        '@semantic-release/github'
    ]
}