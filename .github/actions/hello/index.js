const core = require("@actions/core");
const github = require("@actions/github");

try {
  // throw(new Error("Some error message"));

  core.debug("Debug Message");
  core.warning("Warning Message");
  core.error("Error Message");

  core.setSecret(name);

  const name = core.getInput("who-to-greet");
  console.log(`Hello ${name}`);

  const time = new Date();
  core.setOutput("time", time.toString());

  core.startGroup("Logging github object");
  console.log(JSON.stringify(github, null, "\t"));

  core.endGroup();

  core.exportVariable("HELLO", "heellllooooooo");
} catch (error) {
  core.setFailed(error.message);
}
