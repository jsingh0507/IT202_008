<table><tr><td> <em>Assignment: </em> IT202 Milestone1 Deliverable</td></tr>
<tr><td> <em>Student: </em> Jaspreet Singh (js274)</td></tr>
<tr><td> <em>Generated: </em> 4/12/2023 9:44:50 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S23/it202-milestone1-deliverable/grade/js274" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone1 branch</li><li>Create a milestone1.md file in your Project folder</li><li>Git add/commit/push this empty file to Milestone1 (you'll need the link later)</li><li>Fill in the deliverable items<ol><li>For each feature, add a direct link (or links) to the expected file the implements the feature from Heroku Prod (I.e,&nbsp;<a href="https://mt85-prod.herokuapp.com/Project/register.php">https://mt85-prod.herokuapp.com/Project/register.php</a>)</li></ol></li><li>Ensure your images display correctly in the sample markdown at the bottom</li><ol><li>NOTE: You may want to try to capture as much checklist evidence in your screenshots as possible, you do not need individual screenshots and are recommended to combine things when possible. Also, some screenshots may be reused if applicable.</li></ol><li>Save the submission items</li><li>Copy/paste the markdown from the "Copy markdown to clipboard link" or via the download button</li><li>Paste the code into the milestone1.md file or overwrite the file</li><li>Git add/commit/push the md file to Milestone1</li><li>Double check the images load when viewing the markdown file (points will be lost for invalid/non-loading images)</li><li>Make a pull request from Milestone1 to dev and merge it (resolve any conflicts)<ol><li>Make sure everything looks ok on heroku dev</li></ol></li><li>Make a pull request from dev to prod (resolve any conflicts)<ol><li>Make sure everything looks ok on heroku prod</li></ol></li><li>Submit the direct link from github prod branch to the milestone1.md file (no other links will be accepted and will result in 0)</li></ol></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Feature: User will be able to register a new account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231617191-491ce5cb-da38-44e2-b2e8-2084d0da258f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing valid data before submitting<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231617305-70722fa9-b540-420a-9750-2efca716362c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>password no accepted <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231617980-0e60bf4c-b172-4f57-86a2-83eaccadf888.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show email not available validation (already registered)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231617738-3341db57-3f7d-429b-896f-00afc3807c90.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show username not available validation (username is taken)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231618247-37d0cc6c-7d98-4cf1-91e1-ffbea4019960.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show the form with valid data filled in before the form is submitted<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Users table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231618545-f9ad8c76-d975-47a5-8ddc-84adacefe66e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>valid user just created showing in the database<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jsingh0507/IT202_008/pull/9">https://github.com/jsingh0507/IT202_008/pull/9</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>When we enter information in the fields and click the submit button, the<br>data is sent for processing to related PHP file. In php validation the<br>script checks the data entered in respective fields based on the rules we<br>have set early in the code and returns error if does not meet<br>the requirements. Same goes for the password we set the rules in the<br>code and if the data entered does not follow it it sends an<br>error. same goes for this early we create a db table and based<br>on that we record the info entered.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Feature: User will be able to login to their account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231618846-6b091b7c-c60d-4423-bb02-509f746f76c6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show password mismatch validation<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231619042-6ec3be63-5992-49ab-a22f-64024d19a9ff.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>validation based on non-existing user<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of successful login</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231619182-24546a48-7fe1-41e7-8e37-6383641f39a3.png"/></td></tr>
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
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231619315-235e5197-36ac-401a-85d1-4e29a5284e11.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows user is able to log out<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the logged out user can't access a login-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231619417-5890fba1-4795-4f2a-a2f4-5308021ce211.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>message shows that user must be logged in if trying to access home<br>page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jsingh0507/IT202_008/pull/11">https://github.com/jsingh0507/IT202_008/pull/11</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>in this case as we made the code once we logged out the<br>session is destroyed, and if we try to access a page or go<br>back it will not allow us to do so, as we wrote in<br>the code it destroyed the session.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Feature: Basic Security Rules Implemented / Basic Roles Implemented </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the logged out user can't access a login-protected page (may be the same as similar request)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231619417-5890fba1-4795-4f2a-a2f4-5308021ce211.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>shows not logged in <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing a user without an appropriate role can't access the role-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231619580-2bba8792-ebf2-4584-81a2-89d0e90528b7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>trying to get access admin page without having proper permission<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Roles table with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231619779-e74805a8-cabe-4d07-9368-99531120f99f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing the user that is admin and has all the pages available<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231619938-3b1ad829-556d-4a5d-9aae-92df24aae1d5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing in db that user with id 1 is test123<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231619955-9227fe74-09d8-4da1-8690-f38fac5a2d84.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing that the user with id 1 who is test123 is admin<br></p>
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
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231620458-88f8db8b-e623-490a-a82a-44b2efa75da4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing new css style with navigation bar, forms, UI, and data ouput updated<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231620459-2c70608c-81d0-4030-b516-0a31b82e07f1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing new css style with navigation bar, forms, UI, and data ouput updated<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231620462-486e58bc-f9cc-4b2b-8c87-00508e475819.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing new css style with navigation bar, forms, UI, and data ouput updated<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231620464-584c5dca-a3f6-4b93-a061-2a34258928f5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing new css style with navigation bar, forms, UI, and data ouput updated<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jsingh0507/IT202_008/pull/28">https://github.com/jsingh0507/IT202_008/pull/28</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain your CSS at a high level</td></tr>
<tr><td> <em>Response:</em> <p>For styling I went for a basic background that consist of a light<br>theme and for nav bar I chose purple color with white text and<br>whenever I hover it highlights it, with forms I changed the shape of<br>the bar and the text fields.&nbsp;<div>To do so I just basically changed the<br>style.css file with new parameters and color and shapes.</div><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Feature: Any output messages/errors should be "user friendly" </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of some examples of errors/messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231619580-2bba8792-ebf2-4584-81a2-89d0e90528b7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing message to user that it is forbidden to go in admin files<br>without being admin Message<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231619417-5890fba1-4795-4f2a-a2f4-5308021ce211.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>shows that you must be logged in <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231619315-235e5197-36ac-401a-85d1-4e29a5284e11.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>shows a message that you successfully logged out<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a related pull request</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jsingh0507/IT202_008/pull/12">https://github.com/jsingh0507/IT202_008/pull/12</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how you made messages user friendly</td></tr>
<tr><td> <em>Response:</em> <p>We used Flash message handlers that throws to the user a message if<br>something went wrong or just it doesn&#39;t not match the requirmenst or rules<br>set by us in the code earlier.<div>We made the message clear so the<br>user can understand what went wrong.</div><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Feature: Users will be able to see their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231622382-206cd036-de64-4e21-a9aa-8d69c05953de.png"/></td></tr>
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
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231622858-6708e778-1d7d-4dc2-9d06-d8976374a970.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show username validation message<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231623077-282a6979-8ca5-49b6-bca2-b401ba89c914.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show email validation message<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231623284-1fe66eaf-f0d8-41d0-84d5-8c6722a73480.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show password validation message<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231623530-1ef92fe9-0020-4028-b3aa-dfbad6a22a8d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show password mismatch message<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231623705-783e1e34-24eb-4b81-9248-bc8d2ef56985.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Show email/username already in use message<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add before and after screenshots of the Users table when a user edits their profile</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231624164-55b651e1-8784-44b7-a18d-dae3f0f2d728.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot before changing the username in DB<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/231624198-a9fcaea1-5ec9-43ed-8cf2-ccfca56044a7.png"/></td></tr>
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