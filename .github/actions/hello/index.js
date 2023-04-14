const core = require('@actions/core');
const github =  require('@actions/github');


try {
    //throw(new Error("Some error message"));
    const name = core.getInput('who-to-greet');
    console.log(`Hello ${name}`);
    const time = new Date();
    core.setOutput("time", time.toString());
    console.log(JSON.stringifyI(github, null, '\t'));

} catch(error) {
    core.setFailed(error.message);
}

