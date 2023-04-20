const core = require("@actions/core");
const github = require("@actions/github");

try {
  const token = core.getInput("token");
  const title = core.getInput("title");
  const body = core.getInput("body");
  const assignees = core.getInput("assignees");

  const octokit = new github.GitHub(token);

  const response = octokit.issues.create({
    //owner: github.context.repo.owner,
    //repo: github.context.repo.repo,
    ...github.context.repo, // JavaScript ESX syntax
    //title: title --> how the key is the same as variable, we can just write de variable
    title,
    body,
    assignees: assignees ? assignees.split("\n") : undefined
  });

  core.setOutput("issue", JSON.stringify(response.data));
} catch (error) {
  core.setFailed(error.message);
}

// To compile: npx ncc build .github/actions/issue/index.js -o .github/actions/issue/dist
