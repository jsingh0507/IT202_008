<table><tr><td> <em>Assignment: </em> IT202 Milestone1 Deliverable</td></tr>
<tr><td> <em>Student: </em> Jaspreet Singh (js274)</td></tr>
<tr><td> <em>Generated: </em> 4/10/2023 11:02:33 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S23/it202-milestone1-deliverable/grade/js274" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone1 branch</li><li>Create a milestone1.md file in your Project folder</li><li>Git add/commit/push this empty file to Milestone1 (you'll need the link later)</li><li>Fill in the deliverable items<ol><li>For each feature, add a direct link (or links) to the expected file the implements the feature from Heroku Prod (I.e,&nbsp;<a href="https://mt85-prod.herokuapp.com/Project/register.php">https://mt85-prod.herokuapp.com/Project/register.php</a>)</li></ol></li><li>Ensure your images display correctly in the sample markdown at the bottom</li><ol><li>NOTE: You may want to try to capture as much checklist evidence in your screenshots as possible, you do not need individual screenshots and are recommended to combine things when possible. Also, some screenshots may be reused if applicable.</li></ol><li>Save the submission items</li><li>Copy/paste the markdown from the "Copy markdown to clipboard link" or via the download button</li><li>Paste the code into the milestone1.md file or overwrite the file</li><li>Git add/commit/push the md file to Milestone1</li><li>Double check the images load when viewing the markdown file (points will be lost for invalid/non-loading images)</li><li>Make a pull request from Milestone1 to dev and merge it (resolve any conflicts)<ol><li>Make sure everything looks ok on heroku dev</li></ol></li><li>Make a pull request from dev to prod (resolve any conflicts)<ol><li>Make sure everything looks ok on heroku prod</li></ol></li><li>Submit the direct link from github prod branch to the milestone1.md file (no other links will be accepted and will result in 0)</li></ol></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Feature: User will be able to register a new account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231031183-47e63a1c-745a-4999-9c4c-8af71155a388.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing invalid email<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231031652-a49b101e-8e72-46de-b5cc-bbcdb238add0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>invalid password<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231031781-34757bcf-89f3-432d-b322-74d7b142ead8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>password not match<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231032036-f87769db-3493-4fb8-8efd-b916b4610aec.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>email already registered not available<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231032237-6ffa2525-237b-47e9-90af-56e9e78f4cd3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>username already taken<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231032483-caa17ad0-3e62-4b9c-9dd2-af3a22a03c26.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing valid data before submitting<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Users table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231032855-1ca6b410-a9d9-4a68-b047-fd42a7ae5b6e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>valid user just created showing in the database<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jsingh0507/IT202_008/pull/8">https://github.com/jsingh0507/IT202_008/pull/8</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>When we enter information in the fields and click the submit button, the<br>data is sent for processing to related PHP file. In php validation the<br>script checks the data entered in respective fields based on the rules we<br>have set early in the code and returns error if does not meet<br>the requirements. Same goes for the password we set the rules in the<br>code and if the data entered does not follow it it sends an<br>error. same goes for this early we create a db table and based<br>on that we record the info entered.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Feature: User will be able to login to their account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231034304-dd721a67-91b9-400b-a775-01a8ae403d95.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show password mismatch validation (doesn&#39;t match what&#39;s in the DB)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231034545-779d00b0-0740-483a-bd26-8758ef924c1f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show validation based on non-existing user<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of successful login</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231034785-c2964d94-ea65-4e10-a073-4528ae21dee0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Should have some sort of message that a login occurred<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jsingh0507/IT202_008/pull/25">https://github.com/jsingh0507/IT202_008/pull/25</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>The logic is the same as before based on our rule that we<br>have set in the code, I the information entered matches the data in<br>the db we are able to login, and it is also managed buy<br>handler messages show it shout as successfully if we logged in or we<br>are not able to do so. In this project we do not store<br>the exact password we enter in the webpage but with store its hash<br>value so it is difficult for someone to hack or do something malicious<br>to it.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Feat: Users will be able to logout </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the successful logout message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231035535-8e6f950e-8352-4fc1-b519-789967c5150e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows user is able to log out<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the logged out user can't access a login-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231035832-3e5c3c46-fde6-4637-8fa3-648ba997ee36.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>message shows that user must be logged in if trying to access home.php<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jsingh0507/IT202_008/pull/10">https://github.com/jsingh0507/IT202_008/pull/10</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>in this case as we made the code once we logged out the<br>session is destroyed, and if we try to access a page or go<br>back it will not allow us to do so, as we wrote in<br>the code it destroyed the session.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Feature: Basic Security Rules Implemented / Basic Roles Implemented </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the logged out user can't access a login-protected page (may be the same as similar request)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231035832-3e5c3c46-fde6-4637-8fa3-648ba997ee36.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>shows not logged in <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing a user without an appropriate role can't access the role-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231036813-515253f3-397e-4113-acb5-3e99537889a3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>show something about not having proper role or permission<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Roles table with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231036984-49f174e6-2371-41a6-96e6-cf292bac2d92.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing the user that is admin and has all the pages available<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231037067-85209774-a1c6-4cf2-88ac-2345e78930e3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing the db with the role assigned as admin to user 1<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the UserRoles table with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231037379-0bb89617-bbb5-4bf4-95a9-e887f37f74a3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>test123 <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add the related pull request(s) for these features</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jsingh0507/IT202_008/pull/24">https://github.com/jsingh0507/IT202_008/pull/24</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Explain briefly how the process/code works for login-protected pages</td></tr>
<tr><td> <em>Response:</em> <p><span class="ILfuVd" lang="en">Sessions can be analyzed in a way that reveals how users<br>truly interact with the webpage or app. And with helpers and the tweak<br>we can set that who and how a page can be accessed especially<br>by whom like admin or any other user.</span><br></p><br></td></tr>
<tr><td> <em>Sub-Task 7: </em> Explain briefly how the process/code works for role-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>Same as above the session we set some helper $SESSION that helps as<br>to see and set rules when logged in and logged out in the<br>session.&nbsp;<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Feature: Site should have basic styles/theme applied; everything should be styled </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots to show examples of your site's styles/theme</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231038620-9fcc07cd-7a88-467f-8359-8b2ebde5cb4e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>I kept the css style same as the professor no changes for now,<br>because already made the pull request to dev, will change in the next<br>Milestone<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jsingh0507/IT202_008/pull/12">https://github.com/jsingh0507/IT202_008/pull/12</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain your CSS at a high level</td></tr>
<tr><td> <em>Response:</em> <p>In this feature I already made the pull request to submit the assignment,<br>and was not able to implement any changes for now, Will complete this<br>issue next time and changes for the next Milestone 2.<div>I kept the same<br>hot pink background for now and the same styling fields.</div><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Feature: Any output messages/errors should be "user friendly" </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of some examples of errors/messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231036813-515253f3-397e-4113-acb5-3e99537889a3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing message to user that it is forbidden to go in admin files<br>without being admin Message<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231035832-3e5c3c46-fde6-4637-8fa3-648ba997ee36.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>shows that you must be logged in <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231032036-f87769db-3493-4fb8-8efd-b916b4610aec.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>shows a message that email is already taken and used<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a related pull request</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jsingh0507/IT202_008/pull/12">https://github.com/jsingh0507/IT202_008/pull/12</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how you made messages user friendly</td></tr>
<tr><td> <em>Response:</em> <p>We used Flash message handlers that throws to the user a message if<br>something went wrong or just it doesn&#39;t not match the requirmenst or rules<br>set by us in the code earlier.<div>We made the message clear so the<br>user can understand what went wrong.</div><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Feature: Users will be able to see their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231040280-695e47aa-69bf-4285-8a77-2007e4617e4e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>User able to see profile and email and username already pre filled<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jsingh0507/IT202_008/pull/13">https://github.com/jsingh0507/IT202_008/pull/13</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Explain briefly how the process/code works (view only)</td></tr>
<tr><td> <em>Response:</em> <p>in this case we use some function to get user if and to<br>get email and show them inside their field the we created profile.php and<br>added the function to it and to the login.php<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Feature: User will be able to edit their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page validation messages and success messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231041260-775de23d-c730-43ee-a2bd-b221fc8aa03b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show username validation message<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231041526-f5de512e-ea09-44a1-91a9-ad139fe9e660.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show email validation message<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231041260-775de23d-c730-43ee-a2bd-b221fc8aa03b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show password validation message<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231042074-f6b1eb74-cd93-47c3-b8a5-7e01ef2fc90f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show password mismatch message<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231042274-ce57c59f-9e6d-438c-9b86-559a63ca8d63.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show email/username already in use message<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add before and after screenshots of the Users table when a user edits their profile</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231042620-2c10be50-c3b6-4392-9a6b-539e5f7afa13.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot before changing the username in DB<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231042634-0d9d82ff-b810-4aac-a378-db63febe39a7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot after changing username DB<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jsingh0507/IT202_008/pull/13">https://github.com/jsingh0507/IT202_008/pull/13</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works (edit only)</td></tr>
<tr><td> <em>Response:</em> <p>in this case the we want to make a change to the profile<br>the logic is the the field is selected in the Database and based<br>on what we want to change the field in the database get updated<br>with the new info.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Issues and Project Board </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231043557-ac77fd61-05da-4d7b-9f2d-ddc148fd88c0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing at least 1 issue per Milestone feature<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231043581-f8db628e-af32-4ca1-9f2d-8ba9ff218bab.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing Project Board table with the issues<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231043596-1e47521f-05e9-4b39-b849-997944ecc938.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing Project Board table with the issues<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231043603-ee59a0fd-cbb0-4477-b4be-d1d5729769b5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing what an issue look like when opened from the ProjectBoard<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Include a direct link to your Project Board</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/users/jsingh0507/projects/4">https://github.com/users/jsingh0507/projects/4</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Prod Application Link to Login Page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://js274-prod.herokuapp.com/Project/login.php">https://js274-prod.herokuapp.com/Project/login.php</a> </td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S23/it202-milestone1-deliverable/grade/js274" target="_blank">Grading</a></td></tr></table>