## salesforce.link

Right now the primary reason for this site is a way to bounce a user from a salesforce oauth flow back into salesforce again.

[![Deploy](https://www.herokucdn.com/deploy/button.svg)](https://heroku.com/deploy)


### What is this?

If you ever tried to setup an oauth flow in salesforce for a managed package, you know you can't do it without relying on an external service to bounce the user back to you.

If you try to package a named credential OR if you try to tell a user to setup a named credential for your managed app, then you also have to tell them to make a ConnectedApp and an AuthProvider and copy/paste values between all three.  Not an ideal user experience for people installing your app.

Even if you use just oauth, you can't send the use back to this salesforce org because each company has a different domain, and your connected app can't use wildcards for the callback domain.

Here's how it works:

1.  You set the callback to https://salesforce.link/bounce
2.  In your oauth start url, send the `state` value as the url of the page you want them to come back to

Now, when the user completes the flow, they are sent to `salesforce.link/bounce` which reads the `state` parameter to redirect them to your site.  Now your user will bounce back to the installed salesforce org and let you complete the flow without having to do anything more like deploying heroku servers to handle this (we've done it too many times).

The source for this is on github at https://github.com/cloudanswers/salesforce.link so you can fork and host it yourself if you wish, or just take the page and put it on your domain.

[![Deploy](https://www.herokucdn.com/deploy/button.svg)](https://heroku.com/deploy)

Questions?  Come visit us:

www.cloudanswers.com
