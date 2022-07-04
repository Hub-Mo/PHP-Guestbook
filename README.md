# PHP-Guestbook

## MVC

first time trying out the MVC model.
maybe not perfectly executed the MVC-Model but will keep working on that.

## classes
### Post
this is the template to create posts with.
it has some private properties and public Getters for those private properties.

### PostLoader
this class saves the posts in the storage.json file. 
by first decoding the file and encoding the array of posts.

also displaying the posts. to be able to display the posts we get the-
posts from the storage.json encode it and send it to the homepage in a bootstrap template.

### controller
this guy controls the flow. he activates the function that saves the post and would also do the getting and displaying part of the posts.
this can be changed later. this guy also controls the buttons that you see on the screen.

## the View 

### homePageView
here we display all the posts with a foreach loop. also added a $i to let the user choose how many posts he wants to see
and other cool stuff like emojis and badword filters.

### addMessage

here we put the form where the user can put his message/Post.

---

# RTG

Must-have features

    Posts must have the following attributes:
* [x]        Title
* [x]        Date
* [x]       Content
* [x]        Author name

* [x]    Use at least 2 classes: PostLoader & Post

* [x]    The messages are sorted from new (top) to old (bottom).

* [x]    Make sure the script can handle site defacement attacks: use htmlspecialchars()

* [x]    Only show the latest 20 posts.

Nice to have features

* [x]    Profanity filter: at the top of your script create an array of "bad" words. If somebody tries to enter a message with those words, their messages gets rejected.

* [x]    When the user enters uses a "smily" like ":-)", ";-)", ":-(" replace it with an image of such a smily.

* [x]    Have an input field where the user can enter how many message he wants to see displayed.
