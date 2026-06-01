Fadades - 

Global	Every request
Route	Specific route
Group	Multiple routes together

## Laravel Request Lifecycle - 
* Request → index.php → bootstrap/app.php → Middleware → Routes → Controller → Response → Browser

# A user request first enters through `index.php`, then Laravel initializes the app in `bootstrap/app.php`, passes the request through middleware, matches it with routes, executes the controller, generates a response, and finally sends it back to the browser.
 
# Passing Data to Views - 
1. with() → single data
2. array [] → multiple data
3. compact() → best & clean way

# vendor -> Installed packages (via Composer)