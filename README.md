# Cards Against Humanity Online

This is a project to try and create a sleek and sexy HTML5-based online version of the popular card game.


## Todo

*Flood control (something like you can only submit 1 message every 5 seconds)
*Link to logout (delete PHP session)
*Allow some HTML, but not other (whitelist of tags). Like allow <a href="">, but still strip out javascript. Possibly a few buttons for HTML (WYSIWYG?). Code highlighting for stuff in <code> tags.
*Allow registration, for being able to have a certain username permanently (and all the stuff that goes *with that, like "lost password")
*Protection against non-existent chat room names e.g. /Chat2/room/?name=LOL
*Support for all special characters (UTF-8)
*Private messages (@) (only the person who matches that username will see it)
*Kick people out / ban people by IP (only as an admin user, or perhaps just a blacklist of IPs)
*More emoticons
*Have an actual submit button (for mobile devices that support JavaScript but don't have regular key events)
*Automatic filtering of bad words
*Utilize an outside login system, like Twitter oAuth, Google Login, or Facebook Connect
*Usernames as emails, then use Gravatars
*Links with 4-letter extensions don't work (e.g. .info)
*Long polling, instead of requesting every few seconds

## Contributing

Please contribute to this project. The people who made Cards Against Humanity are awesome and open sourced their game(kinda). The least we can do is give a tiny bit back to them(and us by proxy. because let's face it: we wouldn't do this if the game weren't so fun.).