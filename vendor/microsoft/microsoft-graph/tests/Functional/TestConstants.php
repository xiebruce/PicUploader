<?php

namespace Microsoft\Graph\Test;

/**
* To run functional tests, supply a 
* client ID, username, and password to
* log in via resource owner credential flow.
* While the tests are written in such a way 
* as to preserve the state of the user's account,
* it is best to use a test account for these if 
* possible.
*/
define("CLIENT_ID", getenv("client_id"));
define ("USERNAME", getenv("test_username"));
define("PASSWORD", getenv("test_password"));

// Planner plans can currently not be deleted; you will need
 // to create your own plan and specify the ID here
define("PLAN_ID", getenv("plan_id"));
