# hackventure

<h3>These files are the source code for NITMZ Hackathon and the topic is Chatbot-site that can help police personnel to file FIR, look up cases etc.</h3>

The site is live at http://chatbot2k23.great-site.net

the source code is available in this repository out of which, index.html is the main landing page of the site.

menu.html is the page that loads when we navigate from index.html and both of these sites uses style and javascript bootstrap from online cdn.

The subsections in Menu page loads different pages namely FIR writing, Reports Viewing and IPC sections. The judgement section doesn't have any functionality at the time of submission.

the IPC section uses accordion functionality from jquery.

The FIR section is connected to backend using php to MySQL. That enables the user to store data in it.

The Recent Cases section retrieves data from the same FIR database when requested.

<h2>How to run</h2>

To host the site the user needs to upload all these files directly in any hosting site's file uploading space.

then the user needs to create a database using MySQL and connect all php files from the source code with it using proper ip address, database name, username and password.
