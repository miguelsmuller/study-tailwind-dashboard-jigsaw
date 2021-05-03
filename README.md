# **Dashboard Tailwind CSS and Jigsaw**  
## **OVERVIEW**
A repository to keep a study project for the development of a dashboard using only Tailwind CSS.

**[Tailwind CSS](https://tailwindcss.com/)** is a utility-first framework package with classes that can be composed to build any design, directly in your markup.

For quick learning this study will be developed with the **[Jigsaw Framework](https://jigsaw.tighten.co/)** that allows building static sites using the modern tooling like that Laravel.

### **TO-DO**
- ➕ Dashboard
- ✔️ Inbox
- ✔️ Login
- ✔️ Register
- ❌ DataTable

<br>

## **VIEW DEMO**
**[Tailwind Dashboard Demonstration](https://miguelsmuller.github.io/tailwind-dashboard/)** Some demo pages for the result to be seen

![UI - Inbox](https://raw.githubusercontent.com/miguelsmuller/tailwind-dashboard/master/docs/images/ui-inbox.jpeg "UI - Inbox")

<br>

## **SPECIAL THANKS**
This study is based on the content made by **[Adam Wathan](https://github.com/adamwathan)** *(Creator of Tailwind CSS)* in his **[Live](https://www.youtube.com/watch?v=6xgMkGMIudE)** in his **[ YouTube Channel](https://www.youtube.com/channel/UCy1H38XrN7hi7wHSClfXPqQ)**.

I'm just starting with Tailwind CSS but I can only thank Adam for the work he did. He really does an excellent job with Tailwind and his videos. 

<br>

## **INSTALLING**
To start the project it is essential to install the NPM dependencies:  
**`$ npm install && composer install`**

<br>

## **BUILDING**
When you'd like to generate your site, run the build command from within your project root:  
**`$ ./vendor/bin/jigsaw build production`**

Jigsaw will generate your static HTML and place it in the /build_local directory by default.

<br>

## **PREVIEWING**
To quickly preview your site, use the serve command and access the address **http://localhost:8000** in the browser:  
**`$ ./vendor/bin/jigsaw serve`**

You can also optionally specify the environment and port to serve like so:  
**`$ ./vendor/bin/jigsaw serve production --port=8080`**

<br>

## **EDINTING**
As we are using Laravel Mix to compile your assets (which is included in the default Jigsaw setup), we can use Browsersync by simply running:  
**`$ npm run watch`**

<br>

## **CONTRIBUTING**
1. [Fork it!](https://help.github.com/articles/fork-a-repo/)
2. [Configuring](https://help.github.com/articles/configuring-a-remote-for-a-fork/) a remote for a fork
3. [Syncing](https://help.github.com/articles/syncing-a-fork/) a fork with the latest version
4. Create your feature branch: `git checkout -b feature-123`
5. Commit your changes: `git commit -m 'Commit message'`
6. Push to the branch: `git push origin feature-123`
7. [Submit a pull request](https://help.github.com/articles/using-pull-requests/) :D

### **PRECAUTIONS**  
**Before commit, double check your code. Please dude.**  

- Execute a `git pull` to keep your checkout up-to-date
- Invoke a `git diff --cached` before committing
- **NOT COMMIT BEFORE RUNNING THE PROJECT LOCALLY AND SEE THE CHANGES RUNNING**
- **MAKE SURE THE CHANGES WORK**
