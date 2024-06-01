# facebook-conversion-api-pixel
Facebook conversion api and pixel facebook


# Step 1: Create a Facebook Business Manager Account
If you don't already have a Facebook Business Manager account, you need to create one:

Go to [business.facebook.com](https://business.facebook.com).
Click "Create Account."
Follow the prompts to set up your account.

# Step 2: Create a Facebook Pixel
In your Facebook Business Manager, go to "Business Settings."
Under "Data Sources," select "Pixels."
Click "Add" and follow the instructions to create a new pixel.
Note down the Pixel ID, as you will need it later.

# Step 3: Generate Access Token
Go to the [Events Manager](https://www.facebook.com/events_manager2/list/pixel/).
Select your Pixel and click "Settings."
Scroll down to the "Conversions API" section.
Click "Generate Access Token" and note down the token.

# Step 4: Set Up Server-Side Code
Depending on your server environment (Node.js, PHP, Python, etc.), you'll need to write code to send events to Facebook. Below are examples for Node.js and PHP.

## Documentation

[Documentation](https://developers.facebook.com/docs/marketing-api/conversions-api/)

# Importance of `event_source_url`
## Contextual Information: 
It provides Facebook with additional context about the event, such as the content or product page that the user was interacting with.

## Attribution: 
Helps in attributing the event to the correct ad or marketing campaign by linking the user's actions to specific pages on your website.

## Verification: 
Assists in verifying the authenticity and accuracy of the events being tracked, ensuring that the data reflects real user interactions on your website.

## User Data Parameters

| Parameters | Description |
| ----------------- | ------------------------------------------------------------------ |
| Email (em) | The user's email address, hashed using SHA-256. |
| Phone (ph) | The user's phone number, hashed using SHA-256. |
| Gender (ge) | The user's gender, "f" for female and "m" for male, hashed using SHA-256. |
| Date of Birth (db) | The user's date of birth in YYYYMMDD format, hashed using SHA-256. |
| Last Name (ln) | The user's last name, hashed using SHA-256. |
| First Name (fn) | The user's first name, hashed using SHA-256. |
| City (ct) | The user's city, hashed using SHA-256. |
| State (st) | The user's state, hashed using SHA-256. |
| ZIP Code (zp) | The user's ZIP code, hashed using SHA-256. |
| Country (country) | The user's country, hashed using SHA-256. |
| External ID (external_id) | Any unique ID from the advertiser, such as a loyalty membership ID, user ID, or cart ID. |
| Client IP Address (client_ip_address) | The IP address of the user, not hashed. |
| Client User Agent (client_user_agent) | The user agent string of the user's browser, not hashed. |
| FBC (fbc) | The Facebook click ID, which comes from fbclid URL parameter. |
| FBP (fbp) | The Facebook browser ID value, which comes from the _fbp cookie. |
| Subscription ID (subscription_id) | The subscription ID for the user in your system.|
| FB Login ID (fb_login_id) | The Facebook ID of the user if they logged in via Facebook Login. |
