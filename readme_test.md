start -> php artisan serve
after start -> php artisan queue:work


The goal of the test project is to create a simple blog engine.

Design really doesn't matter. You may use any design template\css framework you want or not use any at all. E.g. bootstrap or any other shipped with the framework or just the pure HTML with Javascript.

All code should be organised in git repository and posted to any popular Git-hosting (Github, Gitlab, Bitbucket).

Implementation time is up to 2 days (16 hours). Lower times are welcome, if quality is not compromised.

You should use the list of features below as a checklist where you mark only features you have implemented and keep it in the root of your project. Copy that list into the README.md file in the root of your project and use the mark down to write the additional comments about the project and highlight the implemented features.

Features required:
Authorization:
User registration (email, name, password) including email confirmation.
User password update by authorized user himself.
Password reset (optional) for users that have the password forgotten.
User login.
Creation, update and removal endpoints of the blog should be accessible by the authorized users only. Also, only owners of the posts and comments should be able to update and delete them. While browsing the blog should be available for any user, even unauthenticated.
Blog engine:
Post (Should have title, body, likes and comments, creation time)
Comments (Should belong to posts and are tied to users. Can have body and likes)
Create post 
Update post (Update title and body)
Like post (Post liking should not make page reload. I.e. use Javascript to make likes)
Blog view engine:
Display list of posts from latest to oldest with pagination of 25 posts per screen (Displayed in list posts should have full title, creation time, author name, excerpt of body up to 70 characters, like count, like button and button to go to full post)
List of posts should be able to be filtered by: creation time (latest -> oldest, latest <- oldest, like count (higher -> lower),  specific author)
Display a single post. I.e. show full post info: title, author name (as a link on which you can press and go to list of posts created by this author), creation time, full body, likes, all comments with their authors.
DB:
Seeds should provide a couple of users for the blog app.
Use migrations for any DB modifications.

Nice-to-haves (Not required):
Use wysiwyg for post creation
Flash messages for displaying messages
Unit/integration tests
Caching of the responses
Admin role
Live comment section for posts (long pooling or WS)

Any advanced features you want if you have implemented all of the above. Write down about them below:

