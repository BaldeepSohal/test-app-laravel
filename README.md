## Laravel Test App

A Laravel App demonstrating the use of Solid Principles


A web app consisting of a text field and a submit button. The user enters a value in the text field in this format "command arg1 arg2 arg3 ... argN" and press the submit button in order to see the result.


Commands:
* add:       adds numeric arguments.
* sort-asc:  sort arguments in ascending order.
* repo-desc: perform a GitHub API call using owner and repo arguments to return a description of the repository.


For example, the user submits "add 5 10 20 40" and a result of 75 is returned.


The app uses:
* object-oriented PHP 7
* validate the input
* secure
* permit addition of new commands (like subtract) without disturbing existing code (use the open/closed principle)
* ajax to return results (no page reloads)
