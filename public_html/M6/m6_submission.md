<table><tr><td> <em>Assignment: </em> HW HTML5 Canvas Game</td></tr>
<tr><td> <em>Student: </em> Jaspreet Singh (js274)</td></tr>
<tr><td> <em>Generated: </em> 5/4/2023 10:52:14 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S23/hw-html5-canvas-game/grade/js274" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Create a branch for this assignment called&nbsp;<em>M6-HTML5-Canvas</em></li><li>Pick a base HTML5 game from&nbsp;<a href="https://bencentra.com/2017-07-11-basic-html5-canvas-games.html">https://bencentra.com/2017-07-11-basic-html5-canvas-games.html</a></li><li>Create a folder inside public_html called&nbsp;<em>M6</em></li><li>Create an html5.html file in your M6 folder (do not put it in Project even if you're doing arcade)</li><li>Copy one of the base games (from the above link)</li><li>Add/Commit the baseline of the game you'll mod for this assignment&nbsp;<em>(Do this before you start any mods/changes)</em></li><li>Make two significant changes<ol><li>Static changes like hard-coded colors/values will not count at all (i.e., changing shapes/colors/values that are globally defined and set only once.</li><li>Direct copies of my class example changes will not be accepted (i.e., just having an AI player for pong, rotating canvas, or multi-ball unless you make a significant tweak to it)</li><li>Significant changes are things that change with game logic or modify how the game works. Static changes like hard-coded colors/values will not count at all (i.e., changing shapes/colors/values that are globally defined and set only once). You may however change such values through game logic during runtime. (i.e., when points are scored, boundaries are hit, some action occurs, etc)</li></ol></li><li>Evidence/Screenshots<ol><li>As best as you can, gather evidence for your first significant change and fill in the deliverable items below.</li><li>As best as you can, gather evidence for your significant change and fill in the deliverable items below.</li><li>Remember to include your ucid/date as comments in any screenshots that have code</li><li>Ensure your screenshots load and are visible from the md file in step 9</li></ol></li><li>In the M6 folder create a new file called m6_submission.md</li><li>Save your below responses, generate the markdown, and paste the output to this file</li><li>Add/commit/push all related files as necessary</li><li>Merge your pull request once you're satisfied with the .md file and the canvas game mods</li><li>Create a new pull request from dev to prod and merge it</li><li>Locally checkout dev and pull the merged changes from step 12</li></ol><p>Each missed or failed to follow instruction is eligible for -0.25 from the final grade</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Game Info </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> What game did you pick to edit/modify?</td></tr>
<tr><td> <em>Response:</em> <p>Collect the Squares<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the direct link to the html5.html file from Heroku Prod (i.e., https://mt85-prod.herokuapp.com/M6/html5.html)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://js274-prod.herokuapp.com/M6/html5.html">https://js274-prod.herokuapp.com/M6/html5.html</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the pull request link for this assignment from M6-HTML5-Canvas to dev</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jsingh0507/IT202_008/pull/47">https://github.com/jsingh0507/IT202_008/pull/47</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Significant Change #1 </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Describe your change/modification</td></tr>
<tr><td> <em>Response:</em> <p>The first change I made is in the game play. So basically whenever<br>the score increases the size of the square decreases and changes the color<br>of the square that I predefined in an array.<div><br></div><div><br><div><br></div><div><br><div><br></div></div></div><br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Screenshot of the change while playing (try your best as some changes may be nearly impossible to capture)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/236365334-e2ddf3db-3dc2-4ca6-849d-35f9effb5255.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Score is 0 and it shows initial size of the square and color<br>red<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/236365385-d583a4ca-b6c6-4215-86e9-98a5d40c4a39.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Scores changes and so the size of the square and its color turns<br>to black<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/236365435-a56e33bd-0d1a-4453-a47d-41ca7f38954d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>again score changes so the size of the square and its color<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/236365474-4471dd01-9d7e-4b50-9bac-8100d38f8c8a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>again scores changes and so the size and color<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Screenshot of the relevant lines of code that implement your change (make sure your ucid and the date are shown in comments) In the caption briefly describe/explain how the code snippet works.</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/236366283-30903881-a774-4c95-a5f0-0bf6e6343bd6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows the code if it collides the length of the square decreases, and<br>assign a new color to the currentColorIndex variable from the array of color<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/236366331-6847e9b8-c47b-400f-84db-5ada5ab4c837.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>After scoring fill the color of the square with the new color<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/236366353-13dadc33-cccd-4b20-944f-289f52e7bd43.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Defining the squareColors with different colors value<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Significant Change #2 </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Describe your change/modification</td></tr>
<tr><td> <em>Response:</em> <p>The second changes I made is that whenever the score reaches 20 the<br>timer reset to its initial value. And the major change I made in<br>the gameplay is that I made the target square moving, so its keep<br>moving while the user try to collides. the target square keep moving inside<br>the boundaries with certain speed. I made it like the snake games but<br>it in this case the target keep moving and the size of the<br>player square keep decreasing.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Screenshot of the change while playing (try your best as some changes may be nearly impossible to capture)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/236366982-a253e806-aa29-4b70-8f4e-57e60038708e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>it shows the initial position of the green square<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/236367037-d173dd6f-7199-40f2-9378-81f82707dd9e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>it shoes the same green square at a different location because it keeps<br>moving<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/236367092-086045e6-43ce-4bc5-ae16-47480d1c0772.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>again it shows the score change and the position of the green square<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/236367118-e6975079-f34a-4011-8e1c-4c4090546e92.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>now it shows the green square position changed as it keeps moving<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Screenshot of the relevant lines of code that implement your change (make sure your ucid and the date are shown in comments) In the caption briefly describe/explain how the code snippet works.</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/236367351-32bdf626-5035-405e-9f17-89cc875e7b1e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>function to keep the target square moving<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/236367383-0ea0016f-508a-446e-ba6e-6f3615b16dad.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>if the score reaches 20 the timer get reset<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/236367412-9b2bebb4-55fd-4b3a-abb8-64ff6e4760fd.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>showing the code that keeps moving the square target<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/122956356/236367487-7aaba28e-5035-4929-9982-aa134f9643ba.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>target square speed predefined to 10<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Discuss </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Talk about what you learned during this assignment and the related HTML5 Canvas readings (at least a few sentences for full credit)</td></tr>
<tr><td> <em>Response:</em> <p>In this assignment I learned how to use html and css properly with<br>javascript, also had fun changing the game.<div>The main thing I learned is that<br>it is really difficult to come up with a change for a game<br>is already made. Overall this experience made me learn new stuff.</div><br></p><br></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S23/hw-html5-canvas-game/grade/js274" target="_blank">Grading</a></td></tr></table>