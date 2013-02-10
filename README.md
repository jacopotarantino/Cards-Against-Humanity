# Cards Against Humanity Online

This is a project to try and create a sleek and sexy HTML5-based online version of the popular card game.


## Todo

* Flood control (something like you can only submit 1 message every 5 seconds)
* Link to logout (delete PHP session)
* Allow some HTML, but still strip out javascript. Possibly a few buttons for HTML (WYSIWYG?)
* Allow registration, for being able to have a certain username permanently (and all the stuff that goes with that, like "lost password")
* Protection against non-existent chat room names e.g. /Chat2/room/?name=LOL
* Support for all special characters (UTF-8)
* Private messages (@) (only the person who matches that username will see it)
* Kick people out / ban people by IP (only as an admin user, or perhaps just a blacklist of IPs)
* More emoticons
* Have an actual submit button (for mobile devices that support JavaScript but don't have regular key events)
* Automatic filtering of bad words
* Utilize an outside login system, like Twitter oAuth, Google Login, or Facebook Connect
* Usernames as emails, then use Gravatars
* Links with 4-letter extensions don't work (e.g. .info)
* Long polling, instead of requesting every few seconds

## Contributing

This project is developed by a great team. The chat functionality and the base of the application logic is taken from the Chat2 project at http://css-tricks.com/chat2/ . The project also uses Foundation by Zurb. Most of the code was developed by Jacopo Tarantino. Security testing was performed by Benjamin Loula. User testing was performed by Benjamin Smith.

Please contribute to this project. The people who made Cards Against Humanity are awesome and open sourced their game(kinda). The least we can do is give a tiny bit back to them(and us by proxy. because let's face it: we wouldn't do this if the game weren't so damn fun.).