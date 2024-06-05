<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Tickets API Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://tickets-api.test";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-4.36.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-4.36.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authentication" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authentication">
                    <a href="#authentication">Authentication</a>
                </li>
                                    <ul id="tocify-subheader-authentication" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="authentication-POSTapi-login">
                                <a href="#authentication-POSTapi-login">Login
Authenticates the user and returns a API token</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="authentication-POSTapi-logout">
                                <a href="#authentication-POSTapi-logout">Logout
Signs out the current user and destroys the API token</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-register">
                                <a href="#endpoints-POSTapi-register">POST api/register</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-user">
                                <a href="#endpoints-GETapi-user">GET api/user</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-docs-v1">
                                <a href="#endpoints-GETapi-docs-v1">Invoke the controller method.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-tickets--id-">
                                <a href="#endpoints-GETapi-v1-tickets--id-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-v1-tickets--id-">
                                <a href="#endpoints-DELETEapi-v1-tickets--id-">Remove the specified resource from storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-v1-tickets--ticket_id-">
                                <a href="#endpoints-PUTapi-v1-tickets--ticket_id-">PUT api/v1/tickets/{ticket_id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PATCHapi-v1-tickets--ticket_id-">
                                <a href="#endpoints-PATCHapi-v1-tickets--ticket_id-">Update the specified resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-users">
                                <a href="#endpoints-GETapi-v1-users">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-users">
                                <a href="#endpoints-POSTapi-v1-users">Store a newly created resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-users--id-">
                                <a href="#endpoints-GETapi-v1-users--id-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-v1-users--id-">
                                <a href="#endpoints-DELETEapi-v1-users--id-">Remove the specified resource from storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-v1-users--user_id-">
                                <a href="#endpoints-PUTapi-v1-users--user_id-">PUT api/v1/users/{user_id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PATCHapi-v1-users--user_id-">
                                <a href="#endpoints-PATCHapi-v1-users--user_id-">Update the specified resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-authors">
                                <a href="#endpoints-GETapi-v1-authors">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-authors--id-">
                                <a href="#endpoints-GETapi-v1-authors--id-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-v1-authors--id-">
                                <a href="#endpoints-DELETEapi-v1-authors--id-">Remove the specified resource from storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-authors--author_id--tickets">
                                <a href="#endpoints-GETapi-v1-authors--author_id--tickets">GET api/v1/authors/{author_id}/tickets</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-authors--author_id--tickets">
                                <a href="#endpoints-POSTapi-v1-authors--author_id--tickets">Store a newly created resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-v1-authors--author_id--tickets--id-">
                                <a href="#endpoints-DELETEapi-v1-authors--author_id--tickets--id-">DELETE api/v1/authors/{author_id}/tickets/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-v1-authors--author_id--tickets--ticket_id-">
                                <a href="#endpoints-PUTapi-v1-authors--author_id--tickets--ticket_id-">PUT api/v1/authors/{author_id}/tickets/{ticket_id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PATCHapi-v1-authors--author_id--tickets--ticket_id-">
                                <a href="#endpoints-PATCHapi-v1-authors--author_id--tickets--ticket_id-">PATCH api/v1/authors/{author_id}/tickets/{ticket_id}</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-managing-tickets" class="tocify-header">
                <li class="tocify-item level-1" data-unique="managing-tickets">
                    <a href="#managing-tickets">Managing Tickets</a>
                </li>
                                    <ul id="tocify-subheader-managing-tickets" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="managing-tickets-GETapi-v1-tickets">
                                <a href="#managing-tickets-GETapi-v1-tickets">Get All Tickets.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="managing-tickets-POSTapi-v1-tickets">
                                <a href="#managing-tickets-POSTapi-v1-tickets">Create a Ticket.</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: June 5, 2024</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://tickets-api.test</code>
</aside>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>To authenticate requests, include an <strong><code>Authorization</code></strong> header with the value <strong><code>"Bearer {YOUR_AUTH_KEY}"</code></strong>.</p>
<p>All authenticated endpoints are marked with a <code>requires authentication</code> badge in the documentation below.</p>
<p>You can retrieve your token by visiting your dashboard and clicking <b>Generate API token</b>.</p>

        <h1 id="authentication">Authentication</h1>

    

                                <h2 id="authentication-POSTapi-login">Login
Authenticates the user and returns a API token</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://tickets-api.test/api/login" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"bfisher@example.com\",
    \"password\": \"$L{NTZMt\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://tickets-api.test/api/login"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "bfisher@example.com",
    "password": "$L{NTZMt"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-login">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;token&quot;: &quot;{YOUR_AUTH_KEY}&quot;
    },
    &quot;message&quot;: &quot;Authenticated&quot;,
    &quot;status&quot;: 200
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-login"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-login">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-login" data-method="POST"
      data-path="api/login"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-login"
                    onclick="tryItOut('POSTapi-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-login"
                    onclick="cancelTryOut('POSTapi-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-login"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/login</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-login"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-login"
               value="bfisher@example.com"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>bfisher@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-login"
               value="$L{NTZMt"
               data-component="body">
    <br>
<p>Must be at least 8 characters. Example: <code>$L{NTZMt</code></p>
        </div>
        </form>

                    <h2 id="authentication-POSTapi-logout">Logout
Signs out the current user and destroys the API token</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-logout">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://tickets-api.test/api/logout" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://tickets-api.test/api/logout"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-logout">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-logout" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-logout"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-logout"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-logout">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-logout" data-method="POST"
      data-path="api/logout"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-logout', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-logout"
                    onclick="tryItOut('POSTapi-logout');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-logout"
                    onclick="cancelTryOut('POSTapi-logout');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-logout"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/logout</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-logout"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-POSTapi-register">POST api/register</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-register">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://tickets-api.test/api/register" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://tickets-api.test/api/register"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-register">
</span>
<span id="execution-results-POSTapi-register" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-register"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-register"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-register">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-register" data-method="POST"
      data-path="api/register"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-register', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-register"
                    onclick="tryItOut('POSTapi-register');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-register"
                    onclick="cancelTryOut('POSTapi-register');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-register"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/register</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-register"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-user">GET api/user</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-user">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://tickets-api.test/api/user" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://tickets-api.test/api/user"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-user">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 13,
    &quot;name&quot;: &quot;Manager&quot;,
    &quot;email&quot;: &quot;manager@manager.com&quot;,
    &quot;email_verified_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;,
    &quot;is_manager&quot;: true,
    &quot;created_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-user" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-user"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-user" data-method="GET"
      data-path="api/user"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-user', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-user"
                    onclick="tryItOut('GETapi-user');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-user"
                    onclick="cancelTryOut('GETapi-user');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-user"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/user</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-user"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-user"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-user"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-docs-v1">Invoke the controller method.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-docs-v1">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://tickets-api.test/api/docs/v1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://tickets-api.test/api/docs/v1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-docs-v1">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!doctype html&gt;
&lt;html lang=&quot;en&quot;&gt;
&lt;head&gt;
    &lt;meta charset=&quot;utf-8&quot;&gt;
    &lt;meta content=&quot;IE=edge,chrome=1&quot; http-equiv=&quot;X-UA-Compatible&quot;&gt;
    &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1, maximum-scale=1&quot;&gt;
    &lt;title&gt;Tickets API Documentation&lt;/title&gt;

    &lt;link href=&quot;https://fonts.googleapis.com/css?family=Open+Sans&amp;display=swap&quot; rel=&quot;stylesheet&quot;&gt;

    &lt;link rel=&quot;stylesheet&quot; href=&quot;http://tickets-api.test/vendor/scribe/css/theme-default.style.css&quot; media=&quot;screen&quot;&gt;
    &lt;link rel=&quot;stylesheet&quot; href=&quot;http://tickets-api.test/vendor/scribe/css/theme-default.print.css&quot; media=&quot;print&quot;&gt;

    &lt;script src=&quot;https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js&quot;&gt;&lt;/script&gt;

    &lt;link rel=&quot;stylesheet&quot;
          href=&quot;https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css&quot;&gt;
    &lt;script src=&quot;https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js&quot;&gt;&lt;/script&gt;

    &lt;script src=&quot;https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js&quot;&gt;&lt;/script&gt;

    &lt;style id=&quot;language-style&quot;&gt;
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            &lt;/style&gt;

    &lt;script&gt;
        var tryItOutBaseUrl = &quot;http://tickets-api.test&quot;;
        var useCsrf = Boolean();
        var csrfUrl = &quot;/sanctum/csrf-cookie&quot;;
    &lt;/script&gt;
    &lt;script src=&quot;http://tickets-api.test/vendor/scribe/js/tryitout-4.36.0.js&quot;&gt;&lt;/script&gt;

    &lt;script src=&quot;http://tickets-api.test/vendor/scribe/js/theme-default-4.36.0.js&quot;&gt;&lt;/script&gt;

&lt;/head&gt;

&lt;body data-languages=&quot;[&amp;quot;bash&amp;quot;,&amp;quot;javascript&amp;quot;]&quot;&gt;

&lt;a href=&quot;#&quot; id=&quot;nav-button&quot;&gt;
    &lt;span&gt;
        MENU
        &lt;img src=&quot;http://tickets-api.test/vendor/scribe/images/navbar.png&quot; alt=&quot;navbar-image&quot;/&gt;
    &lt;/span&gt;
&lt;/a&gt;
&lt;div class=&quot;tocify-wrapper&quot;&gt;
    
            &lt;div class=&quot;lang-selector&quot;&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;lang-button&quot; data-language-name=&quot;bash&quot;&gt;bash&lt;/button&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;lang-button&quot; data-language-name=&quot;javascript&quot;&gt;javascript&lt;/button&gt;
                    &lt;/div&gt;
    
    &lt;div class=&quot;search&quot;&gt;
        &lt;input type=&quot;text&quot; class=&quot;search&quot; id=&quot;input-search&quot; placeholder=&quot;Search&quot;&gt;
    &lt;/div&gt;

    &lt;div id=&quot;toc&quot;&gt;
                    &lt;ul id=&quot;tocify-header-introduction&quot; class=&quot;tocify-header&quot;&gt;
                &lt;li class=&quot;tocify-item level-1&quot; data-unique=&quot;introduction&quot;&gt;
                    &lt;a href=&quot;#introduction&quot;&gt;Introduction&lt;/a&gt;
                &lt;/li&gt;
                            &lt;/ul&gt;
                    &lt;ul id=&quot;tocify-header-authenticating-requests&quot; class=&quot;tocify-header&quot;&gt;
                &lt;li class=&quot;tocify-item level-1&quot; data-unique=&quot;authenticating-requests&quot;&gt;
                    &lt;a href=&quot;#authenticating-requests&quot;&gt;Authenticating requests&lt;/a&gt;
                &lt;/li&gt;
                            &lt;/ul&gt;
                    &lt;ul id=&quot;tocify-header-authentication&quot; class=&quot;tocify-header&quot;&gt;
                &lt;li class=&quot;tocify-item level-1&quot; data-unique=&quot;authentication&quot;&gt;
                    &lt;a href=&quot;#authentication&quot;&gt;Authentication&lt;/a&gt;
                &lt;/li&gt;
                                    &lt;ul id=&quot;tocify-subheader-authentication&quot; class=&quot;tocify-subheader&quot;&gt;
                                                    &lt;li class=&quot;tocify-item level-2&quot; data-unique=&quot;authentication-POSTapi-login&quot;&gt;
                                &lt;a href=&quot;#authentication-POSTapi-login&quot;&gt;Login
Authenticates the user and returns a API token&lt;/a&gt;
                            &lt;/li&gt;
                                                                                &lt;li class=&quot;tocify-item level-2&quot; data-unique=&quot;authentication-POSTapi-logout&quot;&gt;
                                &lt;a href=&quot;#authentication-POSTapi-logout&quot;&gt;Logout
Signs out the current user and destroys the API token&lt;/a&gt;
                            &lt;/li&gt;
                                                                        &lt;/ul&gt;
                            &lt;/ul&gt;
                    &lt;ul id=&quot;tocify-header-endpoints&quot; class=&quot;tocify-header&quot;&gt;
                &lt;li class=&quot;tocify-item level-1&quot; data-unique=&quot;endpoints&quot;&gt;
                    &lt;a href=&quot;#endpoints&quot;&gt;Endpoints&lt;/a&gt;
                &lt;/li&gt;
                                    &lt;ul id=&quot;tocify-subheader-endpoints&quot; class=&quot;tocify-subheader&quot;&gt;
                                                    &lt;li class=&quot;tocify-item level-2&quot; data-unique=&quot;endpoints-POSTapi-register&quot;&gt;
                                &lt;a href=&quot;#endpoints-POSTapi-register&quot;&gt;POST api/register&lt;/a&gt;
                            &lt;/li&gt;
                                                                                &lt;li class=&quot;tocify-item level-2&quot; data-unique=&quot;endpoints-GETapi-user&quot;&gt;
                                &lt;a href=&quot;#endpoints-GETapi-user&quot;&gt;GET api/user&lt;/a&gt;
                            &lt;/li&gt;
                                                                                &lt;li class=&quot;tocify-item level-2&quot; data-unique=&quot;endpoints-GETapi-docs-v1&quot;&gt;
                                &lt;a href=&quot;#endpoints-GETapi-docs-v1&quot;&gt;Invoke the controller method.&lt;/a&gt;
                            &lt;/li&gt;
                                                                                &lt;li class=&quot;tocify-item level-2&quot; data-unique=&quot;endpoints-GETapi-v1-tickets--id-&quot;&gt;
                                &lt;a href=&quot;#endpoints-GETapi-v1-tickets--id-&quot;&gt;Display the specified resource.&lt;/a&gt;
                            &lt;/li&gt;
                                                                                &lt;li class=&quot;tocify-item level-2&quot; data-unique=&quot;endpoints-DELETEapi-v1-tickets--id-&quot;&gt;
                                &lt;a href=&quot;#endpoints-DELETEapi-v1-tickets--id-&quot;&gt;Remove the specified resource from storage.&lt;/a&gt;
                            &lt;/li&gt;
                                                                                &lt;li class=&quot;tocify-item level-2&quot; data-unique=&quot;endpoints-PUTapi-v1-tickets--ticket_id-&quot;&gt;
                                &lt;a href=&quot;#endpoints-PUTapi-v1-tickets--ticket_id-&quot;&gt;PUT api/v1/tickets/{ticket_id}&lt;/a&gt;
                            &lt;/li&gt;
                                                                                &lt;li class=&quot;tocify-item level-2&quot; data-unique=&quot;endpoints-PATCHapi-v1-tickets--ticket_id-&quot;&gt;
                                &lt;a href=&quot;#endpoints-PATCHapi-v1-tickets--ticket_id-&quot;&gt;Update the specified resource in storage.&lt;/a&gt;
                            &lt;/li&gt;
                                                                                &lt;li class=&quot;tocify-item level-2&quot; data-unique=&quot;endpoints-GETapi-v1-users&quot;&gt;
                                &lt;a href=&quot;#endpoints-GETapi-v1-users&quot;&gt;Display a listing of the resource.&lt;/a&gt;
                            &lt;/li&gt;
                                                                                &lt;li class=&quot;tocify-item level-2&quot; data-unique=&quot;endpoints-POSTapi-v1-users&quot;&gt;
                                &lt;a href=&quot;#endpoints-POSTapi-v1-users&quot;&gt;Store a newly created resource in storage.&lt;/a&gt;
                            &lt;/li&gt;
                                                                                &lt;li class=&quot;tocify-item level-2&quot; data-unique=&quot;endpoints-GETapi-v1-users--id-&quot;&gt;
                                &lt;a href=&quot;#endpoints-GETapi-v1-users--id-&quot;&gt;Display the specified resource.&lt;/a&gt;
                            &lt;/li&gt;
                                                                                &lt;li class=&quot;tocify-item level-2&quot; data-unique=&quot;endpoints-DELETEapi-v1-users--id-&quot;&gt;
                                &lt;a href=&quot;#endpoints-DELETEapi-v1-users--id-&quot;&gt;Remove the specified resource from storage.&lt;/a&gt;
                            &lt;/li&gt;
                                                                                &lt;li class=&quot;tocify-item level-2&quot; data-unique=&quot;endpoints-PUTapi-v1-users--user_id-&quot;&gt;
                                &lt;a href=&quot;#endpoints-PUTapi-v1-users--user_id-&quot;&gt;PUT api/v1/users/{user_id}&lt;/a&gt;
                            &lt;/li&gt;
                                                                                &lt;li class=&quot;tocify-item level-2&quot; data-unique=&quot;endpoints-PATCHapi-v1-users--user_id-&quot;&gt;
                                &lt;a href=&quot;#endpoints-PATCHapi-v1-users--user_id-&quot;&gt;Update the specified resource in storage.&lt;/a&gt;
                            &lt;/li&gt;
                                                                                &lt;li class=&quot;tocify-item level-2&quot; data-unique=&quot;endpoints-GETapi-v1-authors&quot;&gt;
                                &lt;a href=&quot;#endpoints-GETapi-v1-authors&quot;&gt;Display a listing of the resource.&lt;/a&gt;
                            &lt;/li&gt;
                                                                                &lt;li class=&quot;tocify-item level-2&quot; data-unique=&quot;endpoints-GETapi-v1-authors--id-&quot;&gt;
                                &lt;a href=&quot;#endpoints-GETapi-v1-authors--id-&quot;&gt;Display the specified resource.&lt;/a&gt;
                            &lt;/li&gt;
                                                                                &lt;li class=&quot;tocify-item level-2&quot; data-unique=&quot;endpoints-DELETEapi-v1-authors--id-&quot;&gt;
                                &lt;a href=&quot;#endpoints-DELETEapi-v1-authors--id-&quot;&gt;Remove the specified resource from storage.&lt;/a&gt;
                            &lt;/li&gt;
                                                                                &lt;li class=&quot;tocify-item level-2&quot; data-unique=&quot;endpoints-GETapi-v1-authors--author_id--tickets&quot;&gt;
                                &lt;a href=&quot;#endpoints-GETapi-v1-authors--author_id--tickets&quot;&gt;GET api/v1/authors/{author_id}/tickets&lt;/a&gt;
                            &lt;/li&gt;
                                                                                &lt;li class=&quot;tocify-item level-2&quot; data-unique=&quot;endpoints-POSTapi-v1-authors--author_id--tickets&quot;&gt;
                                &lt;a href=&quot;#endpoints-POSTapi-v1-authors--author_id--tickets&quot;&gt;Store a newly created resource in storage.&lt;/a&gt;
                            &lt;/li&gt;
                                                                                &lt;li class=&quot;tocify-item level-2&quot; data-unique=&quot;endpoints-DELETEapi-v1-authors--author_id--tickets--id-&quot;&gt;
                                &lt;a href=&quot;#endpoints-DELETEapi-v1-authors--author_id--tickets--id-&quot;&gt;DELETE api/v1/authors/{author_id}/tickets/{id}&lt;/a&gt;
                            &lt;/li&gt;
                                                                                &lt;li class=&quot;tocify-item level-2&quot; data-unique=&quot;endpoints-PUTapi-v1-authors--author_id--tickets--ticket_id-&quot;&gt;
                                &lt;a href=&quot;#endpoints-PUTapi-v1-authors--author_id--tickets--ticket_id-&quot;&gt;PUT api/v1/authors/{author_id}/tickets/{ticket_id}&lt;/a&gt;
                            &lt;/li&gt;
                                                                                &lt;li class=&quot;tocify-item level-2&quot; data-unique=&quot;endpoints-PATCHapi-v1-authors--author_id--tickets--ticket_id-&quot;&gt;
                                &lt;a href=&quot;#endpoints-PATCHapi-v1-authors--author_id--tickets--ticket_id-&quot;&gt;PATCH api/v1/authors/{author_id}/tickets/{ticket_id}&lt;/a&gt;
                            &lt;/li&gt;
                                                                        &lt;/ul&gt;
                            &lt;/ul&gt;
                    &lt;ul id=&quot;tocify-header-managing-tickets&quot; class=&quot;tocify-header&quot;&gt;
                &lt;li class=&quot;tocify-item level-1&quot; data-unique=&quot;managing-tickets&quot;&gt;
                    &lt;a href=&quot;#managing-tickets&quot;&gt;Managing Tickets&lt;/a&gt;
                &lt;/li&gt;
                                    &lt;ul id=&quot;tocify-subheader-managing-tickets&quot; class=&quot;tocify-subheader&quot;&gt;
                                                    &lt;li class=&quot;tocify-item level-2&quot; data-unique=&quot;managing-tickets-GETapi-v1-tickets&quot;&gt;
                                &lt;a href=&quot;#managing-tickets-GETapi-v1-tickets&quot;&gt;Get All Tickets.&lt;/a&gt;
                            &lt;/li&gt;
                                                                                &lt;li class=&quot;tocify-item level-2&quot; data-unique=&quot;managing-tickets-POSTapi-v1-tickets&quot;&gt;
                                &lt;a href=&quot;#managing-tickets-POSTapi-v1-tickets&quot;&gt;Create a Ticket.&lt;/a&gt;
                            &lt;/li&gt;
                                                                        &lt;/ul&gt;
                            &lt;/ul&gt;
            &lt;/div&gt;

    &lt;ul class=&quot;toc-footer&quot; id=&quot;toc-footer&quot;&gt;
                    &lt;li style=&quot;padding-bottom: 5px;&quot;&gt;&lt;a href=&quot;http://tickets-api.test/docs.postman&quot;&gt;View Postman collection&lt;/a&gt;&lt;/li&gt;
                            &lt;li style=&quot;padding-bottom: 5px;&quot;&gt;&lt;a href=&quot;http://tickets-api.test/docs.openapi&quot;&gt;View OpenAPI spec&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href=&quot;http://github.com/knuckleswtf/scribe&quot;&gt;Documentation powered by Scribe ✍&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;

    &lt;ul class=&quot;toc-footer&quot; id=&quot;last-updated&quot;&gt;
        &lt;li&gt;Last updated: June 5, 2024&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;

&lt;div class=&quot;page-wrapper&quot;&gt;
    &lt;div class=&quot;dark-box&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;content&quot;&gt;
        &lt;h1 id=&quot;introduction&quot;&gt;Introduction&lt;/h1&gt;
&lt;aside&gt;
    &lt;strong&gt;Base URL&lt;/strong&gt;: &lt;code&gt;http://tickets-api.test&lt;/code&gt;
&lt;/aside&gt;
&lt;p&gt;This documentation aims to provide all the information you need to work with our API.&lt;/p&gt;
&lt;aside&gt;As you scroll, you&#039;ll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&lt;/aside&gt;

        &lt;h1 id=&quot;authenticating-requests&quot;&gt;Authenticating requests&lt;/h1&gt;
&lt;p&gt;To authenticate requests, include an &lt;strong&gt;&lt;code&gt;Authorization&lt;/code&gt;&lt;/strong&gt; header with the value &lt;strong&gt;&lt;code&gt;&quot;Bearer {YOUR_AUTH_KEY}&quot;&lt;/code&gt;&lt;/strong&gt;.&lt;/p&gt;
&lt;p&gt;All authenticated endpoints are marked with a &lt;code&gt;requires authentication&lt;/code&gt; badge in the documentation below.&lt;/p&gt;
&lt;p&gt;You can retrieve your token by visiting your dashboard and clicking &lt;b&gt;Generate API token&lt;/b&gt;.&lt;/p&gt;

        &lt;h1 id=&quot;authentication&quot;&gt;Authentication&lt;/h1&gt;

    

                                &lt;h2 id=&quot;authentication-POSTapi-login&quot;&gt;Login
Authenticates the user and returns a API token&lt;/h2&gt;

&lt;p&gt;
&lt;small class=&quot;badge badge-darkred&quot;&gt;requires authentication&lt;/small&gt;
&lt;/p&gt;



&lt;span id=&quot;example-requests-POSTapi-login&quot;&gt;
&lt;blockquote&gt;Example request:&lt;/blockquote&gt;


&lt;div class=&quot;bash-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-bash&quot;&gt;curl --request POST \
    &quot;http://tickets-api.test/api/login&quot; \
    --header &quot;Authorization: Bearer {YOUR_AUTH_KEY}&quot; \
    --header &quot;Content-Type: application/json&quot; \
    --header &quot;Accept: application/json&quot; \
    --data &quot;{
    \&quot;email\&quot;: \&quot;nicolas45@example.com\&quot;,
    \&quot;password\&quot;: \&quot;9\&#039;M{rIIc$x_~QDp*.pm\&quot;
}&quot;
&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;


&lt;div class=&quot;javascript-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-javascript&quot;&gt;const url = new URL(
    &quot;http://tickets-api.test/api/login&quot;
);

const headers = {
    &quot;Authorization&quot;: &quot;Bearer {YOUR_AUTH_KEY}&quot;,
    &quot;Content-Type&quot;: &quot;application/json&quot;,
    &quot;Accept&quot;: &quot;application/json&quot;,
};

let body = {
    &quot;email&quot;: &quot;nicolas45@example.com&quot;,
    &quot;password&quot;: &quot;9&#039;M{rIIc$x_~QDp*.pm&quot;
};

fetch(url, {
    method: &quot;POST&quot;,
    headers,
    body: JSON.stringify(body),
}).then(response =&amp;gt; response.json());&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;

&lt;/span&gt;

&lt;span id=&quot;example-responses-POSTapi-login&quot;&gt;
            &lt;blockquote&gt;
            &lt;p&gt;Example response (200):&lt;/p&gt;
        &lt;/blockquote&gt;
                &lt;pre&gt;

&lt;code class=&quot;language-json&quot; style=&quot;max-height: 300px;&quot;&gt;{
    &amp;quot;data&amp;quot;: {
        &amp;quot;token&amp;quot;: &amp;quot;{YOUR_AUTH_KEY}&amp;quot;
    },
    &amp;quot;message&amp;quot;: &amp;quot;Authenticated&amp;quot;,
    &amp;quot;status&amp;quot;: 200
}&lt;/code&gt;
 &lt;/pre&gt;
    &lt;/span&gt;
&lt;span id=&quot;execution-results-POSTapi-login&quot; hidden&gt;
    &lt;blockquote&gt;Received response&lt;span
                id=&quot;execution-response-status-POSTapi-login&quot;&gt;&lt;/span&gt;:
    &lt;/blockquote&gt;
    &lt;pre class=&quot;json&quot;&gt;&lt;code id=&quot;execution-response-content-POSTapi-login&quot;
      data-empty-response-text=&quot;&lt;Empty response&gt;&quot; style=&quot;max-height: 400px;&quot;&gt;&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-error-POSTapi-login&quot; hidden&gt;
    &lt;blockquote&gt;Request failed with error:&lt;/blockquote&gt;
    &lt;pre&gt;&lt;code id=&quot;execution-error-message-POSTapi-login&quot;&gt;

Tip: Check that you&amp;#039;re properly connected to the network.
If you&amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;form id=&quot;form-POSTapi-login&quot; data-method=&quot;POST&quot;
      data-path=&quot;api/login&quot;
      data-authed=&quot;1&quot;
      data-hasfiles=&quot;0&quot;
      data-isarraybody=&quot;0&quot;
      autocomplete=&quot;off&quot;
      onsubmit=&quot;event.preventDefault(); executeTryOut(&#039;POSTapi-login&#039;, this);&quot;&gt;
    &lt;h3&gt;
        Request&amp;nbsp;&amp;nbsp;&amp;nbsp;
                    &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-tryout-POSTapi-login&quot;
                    onclick=&quot;tryItOut(&#039;POSTapi-login&#039;);&quot;&gt;Try it out ⚡
            &lt;/button&gt;
            &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-canceltryout-POSTapi-login&quot;
                    onclick=&quot;cancelTryOut(&#039;POSTapi-login&#039;);&quot; hidden&gt;Cancel 🛑
            &lt;/button&gt;&amp;nbsp;&amp;nbsp;
            &lt;button type=&quot;submit&quot;
                    style=&quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-executetryout-POSTapi-login&quot;
                    data-initial-text=&quot;Send Request 💥&quot;
                    data-loading-text=&quot;⏱ Sending...&quot;
                    hidden&gt;Send Request 💥
            &lt;/button&gt;
            &lt;/h3&gt;
            &lt;p&gt;
            &lt;small class=&quot;badge badge-black&quot;&gt;POST&lt;/small&gt;
            &lt;b&gt;&lt;code&gt;api/login&lt;/code&gt;&lt;/b&gt;
        &lt;/p&gt;
                &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Headers&lt;/b&gt;&lt;/h4&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Authorization&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Authorization&quot; class=&quot;auth-value&quot;               data-endpoint=&quot;POSTapi-login&quot;
               value=&quot;Bearer {YOUR_AUTH_KEY}&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;Bearer {YOUR_AUTH_KEY}&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Content-Type&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Content-Type&quot;                data-endpoint=&quot;POSTapi-login&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Accept&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Accept&quot;                data-endpoint=&quot;POSTapi-login&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Body Parameters&lt;/b&gt;&lt;/h4&gt;
        &lt;div style=&quot; padding-left: 28px;  clear: unset;&quot;&gt;
            &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;email&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;string&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;email&quot;                data-endpoint=&quot;POSTapi-login&quot;
               value=&quot;nicolas45@example.com&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Must be a valid email address. Example: &lt;code&gt;nicolas45@example.com&lt;/code&gt;&lt;/p&gt;
        &lt;/div&gt;
                &lt;div style=&quot; padding-left: 28px;  clear: unset;&quot;&gt;
            &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;password&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;string&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;password&quot;                data-endpoint=&quot;POSTapi-login&quot;
               value=&quot;9&#039;M{rIIc$x_~QDp*.pm&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Must be at least 8 characters. Example: &lt;code&gt;9&#039;M{rIIc$x_~QDp*.pm&lt;/code&gt;&lt;/p&gt;
        &lt;/div&gt;
        &lt;/form&gt;

                    &lt;h2 id=&quot;authentication-POSTapi-logout&quot;&gt;Logout
Signs out the current user and destroys the API token&lt;/h2&gt;

&lt;p&gt;
&lt;small class=&quot;badge badge-darkred&quot;&gt;requires authentication&lt;/small&gt;
&lt;/p&gt;



&lt;span id=&quot;example-requests-POSTapi-logout&quot;&gt;
&lt;blockquote&gt;Example request:&lt;/blockquote&gt;


&lt;div class=&quot;bash-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-bash&quot;&gt;curl --request POST \
    &quot;http://tickets-api.test/api/logout&quot; \
    --header &quot;Authorization: Bearer {YOUR_AUTH_KEY}&quot; \
    --header &quot;Content-Type: application/json&quot; \
    --header &quot;Accept: application/json&quot;&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;


&lt;div class=&quot;javascript-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-javascript&quot;&gt;const url = new URL(
    &quot;http://tickets-api.test/api/logout&quot;
);

const headers = {
    &quot;Authorization&quot;: &quot;Bearer {YOUR_AUTH_KEY}&quot;,
    &quot;Content-Type&quot;: &quot;application/json&quot;,
    &quot;Accept&quot;: &quot;application/json&quot;,
};

fetch(url, {
    method: &quot;POST&quot;,
    headers,
}).then(response =&amp;gt; response.json());&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;

&lt;/span&gt;

&lt;span id=&quot;example-responses-POSTapi-logout&quot;&gt;
            &lt;blockquote&gt;
            &lt;p&gt;Example response (200):&lt;/p&gt;
        &lt;/blockquote&gt;
                &lt;pre&gt;

&lt;code class=&quot;language-json&quot; style=&quot;max-height: 300px;&quot;&gt;{}&lt;/code&gt;
 &lt;/pre&gt;
    &lt;/span&gt;
&lt;span id=&quot;execution-results-POSTapi-logout&quot; hidden&gt;
    &lt;blockquote&gt;Received response&lt;span
                id=&quot;execution-response-status-POSTapi-logout&quot;&gt;&lt;/span&gt;:
    &lt;/blockquote&gt;
    &lt;pre class=&quot;json&quot;&gt;&lt;code id=&quot;execution-response-content-POSTapi-logout&quot;
      data-empty-response-text=&quot;&lt;Empty response&gt;&quot; style=&quot;max-height: 400px;&quot;&gt;&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-error-POSTapi-logout&quot; hidden&gt;
    &lt;blockquote&gt;Request failed with error:&lt;/blockquote&gt;
    &lt;pre&gt;&lt;code id=&quot;execution-error-message-POSTapi-logout&quot;&gt;

Tip: Check that you&amp;#039;re properly connected to the network.
If you&amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;form id=&quot;form-POSTapi-logout&quot; data-method=&quot;POST&quot;
      data-path=&quot;api/logout&quot;
      data-authed=&quot;1&quot;
      data-hasfiles=&quot;0&quot;
      data-isarraybody=&quot;0&quot;
      autocomplete=&quot;off&quot;
      onsubmit=&quot;event.preventDefault(); executeTryOut(&#039;POSTapi-logout&#039;, this);&quot;&gt;
    &lt;h3&gt;
        Request&amp;nbsp;&amp;nbsp;&amp;nbsp;
                    &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-tryout-POSTapi-logout&quot;
                    onclick=&quot;tryItOut(&#039;POSTapi-logout&#039;);&quot;&gt;Try it out ⚡
            &lt;/button&gt;
            &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-canceltryout-POSTapi-logout&quot;
                    onclick=&quot;cancelTryOut(&#039;POSTapi-logout&#039;);&quot; hidden&gt;Cancel 🛑
            &lt;/button&gt;&amp;nbsp;&amp;nbsp;
            &lt;button type=&quot;submit&quot;
                    style=&quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-executetryout-POSTapi-logout&quot;
                    data-initial-text=&quot;Send Request 💥&quot;
                    data-loading-text=&quot;⏱ Sending...&quot;
                    hidden&gt;Send Request 💥
            &lt;/button&gt;
            &lt;/h3&gt;
            &lt;p&gt;
            &lt;small class=&quot;badge badge-black&quot;&gt;POST&lt;/small&gt;
            &lt;b&gt;&lt;code&gt;api/logout&lt;/code&gt;&lt;/b&gt;
        &lt;/p&gt;
                &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Headers&lt;/b&gt;&lt;/h4&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Authorization&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Authorization&quot; class=&quot;auth-value&quot;               data-endpoint=&quot;POSTapi-logout&quot;
               value=&quot;Bearer {YOUR_AUTH_KEY}&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;Bearer {YOUR_AUTH_KEY}&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Content-Type&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Content-Type&quot;                data-endpoint=&quot;POSTapi-logout&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Accept&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Accept&quot;                data-endpoint=&quot;POSTapi-logout&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                        &lt;/form&gt;

                &lt;h1 id=&quot;endpoints&quot;&gt;Endpoints&lt;/h1&gt;

    

                                &lt;h2 id=&quot;endpoints-POSTapi-register&quot;&gt;POST api/register&lt;/h2&gt;

&lt;p&gt;
&lt;small class=&quot;badge badge-darkred&quot;&gt;requires authentication&lt;/small&gt;
&lt;/p&gt;



&lt;span id=&quot;example-requests-POSTapi-register&quot;&gt;
&lt;blockquote&gt;Example request:&lt;/blockquote&gt;


&lt;div class=&quot;bash-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-bash&quot;&gt;curl --request POST \
    &quot;http://tickets-api.test/api/register&quot; \
    --header &quot;Authorization: Bearer {YOUR_AUTH_KEY}&quot; \
    --header &quot;Content-Type: application/json&quot; \
    --header &quot;Accept: application/json&quot;&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;


&lt;div class=&quot;javascript-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-javascript&quot;&gt;const url = new URL(
    &quot;http://tickets-api.test/api/register&quot;
);

const headers = {
    &quot;Authorization&quot;: &quot;Bearer {YOUR_AUTH_KEY}&quot;,
    &quot;Content-Type&quot;: &quot;application/json&quot;,
    &quot;Accept&quot;: &quot;application/json&quot;,
};

fetch(url, {
    method: &quot;POST&quot;,
    headers,
}).then(response =&amp;gt; response.json());&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;

&lt;/span&gt;

&lt;span id=&quot;example-responses-POSTapi-register&quot;&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-results-POSTapi-register&quot; hidden&gt;
    &lt;blockquote&gt;Received response&lt;span
                id=&quot;execution-response-status-POSTapi-register&quot;&gt;&lt;/span&gt;:
    &lt;/blockquote&gt;
    &lt;pre class=&quot;json&quot;&gt;&lt;code id=&quot;execution-response-content-POSTapi-register&quot;
      data-empty-response-text=&quot;&lt;Empty response&gt;&quot; style=&quot;max-height: 400px;&quot;&gt;&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-error-POSTapi-register&quot; hidden&gt;
    &lt;blockquote&gt;Request failed with error:&lt;/blockquote&gt;
    &lt;pre&gt;&lt;code id=&quot;execution-error-message-POSTapi-register&quot;&gt;

Tip: Check that you&amp;#039;re properly connected to the network.
If you&amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;form id=&quot;form-POSTapi-register&quot; data-method=&quot;POST&quot;
      data-path=&quot;api/register&quot;
      data-authed=&quot;1&quot;
      data-hasfiles=&quot;0&quot;
      data-isarraybody=&quot;0&quot;
      autocomplete=&quot;off&quot;
      onsubmit=&quot;event.preventDefault(); executeTryOut(&#039;POSTapi-register&#039;, this);&quot;&gt;
    &lt;h3&gt;
        Request&amp;nbsp;&amp;nbsp;&amp;nbsp;
                    &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-tryout-POSTapi-register&quot;
                    onclick=&quot;tryItOut(&#039;POSTapi-register&#039;);&quot;&gt;Try it out ⚡
            &lt;/button&gt;
            &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-canceltryout-POSTapi-register&quot;
                    onclick=&quot;cancelTryOut(&#039;POSTapi-register&#039;);&quot; hidden&gt;Cancel 🛑
            &lt;/button&gt;&amp;nbsp;&amp;nbsp;
            &lt;button type=&quot;submit&quot;
                    style=&quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-executetryout-POSTapi-register&quot;
                    data-initial-text=&quot;Send Request 💥&quot;
                    data-loading-text=&quot;⏱ Sending...&quot;
                    hidden&gt;Send Request 💥
            &lt;/button&gt;
            &lt;/h3&gt;
            &lt;p&gt;
            &lt;small class=&quot;badge badge-black&quot;&gt;POST&lt;/small&gt;
            &lt;b&gt;&lt;code&gt;api/register&lt;/code&gt;&lt;/b&gt;
        &lt;/p&gt;
                &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Headers&lt;/b&gt;&lt;/h4&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Authorization&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Authorization&quot; class=&quot;auth-value&quot;               data-endpoint=&quot;POSTapi-register&quot;
               value=&quot;Bearer {YOUR_AUTH_KEY}&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;Bearer {YOUR_AUTH_KEY}&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Content-Type&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Content-Type&quot;                data-endpoint=&quot;POSTapi-register&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Accept&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Accept&quot;                data-endpoint=&quot;POSTapi-register&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                        &lt;/form&gt;

                    &lt;h2 id=&quot;endpoints-GETapi-user&quot;&gt;GET api/user&lt;/h2&gt;

&lt;p&gt;
&lt;small class=&quot;badge badge-darkred&quot;&gt;requires authentication&lt;/small&gt;
&lt;/p&gt;



&lt;span id=&quot;example-requests-GETapi-user&quot;&gt;
&lt;blockquote&gt;Example request:&lt;/blockquote&gt;


&lt;div class=&quot;bash-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-bash&quot;&gt;curl --request GET \
    --get &quot;http://tickets-api.test/api/user&quot; \
    --header &quot;Authorization: Bearer {YOUR_AUTH_KEY}&quot; \
    --header &quot;Content-Type: application/json&quot; \
    --header &quot;Accept: application/json&quot;&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;


&lt;div class=&quot;javascript-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-javascript&quot;&gt;const url = new URL(
    &quot;http://tickets-api.test/api/user&quot;
);

const headers = {
    &quot;Authorization&quot;: &quot;Bearer {YOUR_AUTH_KEY}&quot;,
    &quot;Content-Type&quot;: &quot;application/json&quot;,
    &quot;Accept&quot;: &quot;application/json&quot;,
};

fetch(url, {
    method: &quot;GET&quot;,
    headers,
}).then(response =&amp;gt; response.json());&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;

&lt;/span&gt;

&lt;span id=&quot;example-responses-GETapi-user&quot;&gt;
            &lt;blockquote&gt;
            &lt;p&gt;Example response (200):&lt;/p&gt;
        &lt;/blockquote&gt;
                &lt;details class=&quot;annotation&quot;&gt;
            &lt;summary style=&quot;cursor: pointer;&quot;&gt;
                &lt;small onclick=&quot;textContent = parentElement.parentElement.open ? &#039;Show headers&#039; : &#039;Hide headers&#039;&quot;&gt;Show headers&lt;/small&gt;
            &lt;/summary&gt;
            &lt;pre&gt;&lt;code class=&quot;language-http&quot;&gt;cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 &lt;/code&gt;&lt;/pre&gt;&lt;/details&gt;         &lt;pre&gt;

&lt;code class=&quot;language-json&quot; style=&quot;max-height: 300px;&quot;&gt;{
    &amp;quot;id&amp;quot;: 13,
    &amp;quot;name&amp;quot;: &amp;quot;Manager&amp;quot;,
    &amp;quot;email&amp;quot;: &amp;quot;manager@manager.com&amp;quot;,
    &amp;quot;email_verified_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;,
    &amp;quot;is_manager&amp;quot;: true,
    &amp;quot;created_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;,
    &amp;quot;updated_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;
}&lt;/code&gt;
 &lt;/pre&gt;
    &lt;/span&gt;
&lt;span id=&quot;execution-results-GETapi-user&quot; hidden&gt;
    &lt;blockquote&gt;Received response&lt;span
                id=&quot;execution-response-status-GETapi-user&quot;&gt;&lt;/span&gt;:
    &lt;/blockquote&gt;
    &lt;pre class=&quot;json&quot;&gt;&lt;code id=&quot;execution-response-content-GETapi-user&quot;
      data-empty-response-text=&quot;&lt;Empty response&gt;&quot; style=&quot;max-height: 400px;&quot;&gt;&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-error-GETapi-user&quot; hidden&gt;
    &lt;blockquote&gt;Request failed with error:&lt;/blockquote&gt;
    &lt;pre&gt;&lt;code id=&quot;execution-error-message-GETapi-user&quot;&gt;

Tip: Check that you&amp;#039;re properly connected to the network.
If you&amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;form id=&quot;form-GETapi-user&quot; data-method=&quot;GET&quot;
      data-path=&quot;api/user&quot;
      data-authed=&quot;1&quot;
      data-hasfiles=&quot;0&quot;
      data-isarraybody=&quot;0&quot;
      autocomplete=&quot;off&quot;
      onsubmit=&quot;event.preventDefault(); executeTryOut(&#039;GETapi-user&#039;, this);&quot;&gt;
    &lt;h3&gt;
        Request&amp;nbsp;&amp;nbsp;&amp;nbsp;
                    &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-tryout-GETapi-user&quot;
                    onclick=&quot;tryItOut(&#039;GETapi-user&#039;);&quot;&gt;Try it out ⚡
            &lt;/button&gt;
            &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-canceltryout-GETapi-user&quot;
                    onclick=&quot;cancelTryOut(&#039;GETapi-user&#039;);&quot; hidden&gt;Cancel 🛑
            &lt;/button&gt;&amp;nbsp;&amp;nbsp;
            &lt;button type=&quot;submit&quot;
                    style=&quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-executetryout-GETapi-user&quot;
                    data-initial-text=&quot;Send Request 💥&quot;
                    data-loading-text=&quot;⏱ Sending...&quot;
                    hidden&gt;Send Request 💥
            &lt;/button&gt;
            &lt;/h3&gt;
            &lt;p&gt;
            &lt;small class=&quot;badge badge-green&quot;&gt;GET&lt;/small&gt;
            &lt;b&gt;&lt;code&gt;api/user&lt;/code&gt;&lt;/b&gt;
        &lt;/p&gt;
                &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Headers&lt;/b&gt;&lt;/h4&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Authorization&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Authorization&quot; class=&quot;auth-value&quot;               data-endpoint=&quot;GETapi-user&quot;
               value=&quot;Bearer {YOUR_AUTH_KEY}&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;Bearer {YOUR_AUTH_KEY}&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Content-Type&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Content-Type&quot;                data-endpoint=&quot;GETapi-user&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Accept&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Accept&quot;                data-endpoint=&quot;GETapi-user&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                        &lt;/form&gt;

                    &lt;h2 id=&quot;endpoints-GETapi-docs-v1&quot;&gt;Invoke the controller method.&lt;/h2&gt;

&lt;p&gt;
&lt;small class=&quot;badge badge-darkred&quot;&gt;requires authentication&lt;/small&gt;
&lt;/p&gt;



&lt;span id=&quot;example-requests-GETapi-docs-v1&quot;&gt;
&lt;blockquote&gt;Example request:&lt;/blockquote&gt;


&lt;div class=&quot;bash-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-bash&quot;&gt;curl --request GET \
    --get &quot;http://tickets-api.test/api/docs/v1&quot; \
    --header &quot;Authorization: Bearer {YOUR_AUTH_KEY}&quot; \
    --header &quot;Content-Type: application/json&quot; \
    --header &quot;Accept: application/json&quot;&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;


&lt;div class=&quot;javascript-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-javascript&quot;&gt;const url = new URL(
    &quot;http://tickets-api.test/api/docs/v1&quot;
);

const headers = {
    &quot;Authorization&quot;: &quot;Bearer {YOUR_AUTH_KEY}&quot;,
    &quot;Content-Type&quot;: &quot;application/json&quot;,
    &quot;Accept&quot;: &quot;application/json&quot;,
};

fetch(url, {
    method: &quot;GET&quot;,
    headers,
}).then(response =&amp;gt; response.json());&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;

&lt;/span&gt;

&lt;span id=&quot;example-responses-GETapi-docs-v1&quot;&gt;
            &lt;blockquote&gt;
            &lt;p&gt;Example response (200):&lt;/p&gt;
        &lt;/blockquote&gt;
                &lt;details class=&quot;annotation&quot;&gt;
            &lt;summary style=&quot;cursor: pointer;&quot;&gt;
                &lt;small onclick=&quot;textContent = parentElement.parentElement.open ? &#039;Show headers&#039; : &#039;Hide headers&#039;&quot;&gt;Show headers&lt;/small&gt;
            &lt;/summary&gt;
            &lt;pre&gt;&lt;code class=&quot;language-http&quot;&gt;cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 &lt;/code&gt;&lt;/pre&gt;&lt;/details&gt;         &lt;pre&gt;

&lt;code class=&quot;language-json&quot; style=&quot;max-height: 300px;&quot;&gt;&amp;lt;!doctype html&amp;gt;
&amp;lt;html lang=&amp;quot;en&amp;quot;&amp;gt;
&amp;lt;head&amp;gt;
    &amp;lt;meta charset=&amp;quot;utf-8&amp;quot;&amp;gt;
    &amp;lt;meta content=&amp;quot;IE=edge,chrome=1&amp;quot; http-equiv=&amp;quot;X-UA-Compatible&amp;quot;&amp;gt;
    &amp;lt;meta name=&amp;quot;viewport&amp;quot; content=&amp;quot;width=device-width, initial-scale=1, maximum-scale=1&amp;quot;&amp;gt;
    &amp;lt;title&amp;gt;Tickets API Documentation&amp;lt;/title&amp;gt;

    &amp;lt;link href=&amp;quot;https://fonts.googleapis.com/css?family=Open+Sans&amp;amp;display=swap&amp;quot; rel=&amp;quot;stylesheet&amp;quot;&amp;gt;

    &amp;lt;link rel=&amp;quot;stylesheet&amp;quot; href=&amp;quot;http://tickets-api.test/vendor/scribe/css/theme-default.style.css&amp;quot; media=&amp;quot;screen&amp;quot;&amp;gt;
    &amp;lt;link rel=&amp;quot;stylesheet&amp;quot; href=&amp;quot;http://tickets-api.test/vendor/scribe/css/theme-default.print.css&amp;quot; media=&amp;quot;print&amp;quot;&amp;gt;

    &amp;lt;script src=&amp;quot;https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js&amp;quot;&amp;gt;&amp;lt;/script&amp;gt;

    &amp;lt;link rel=&amp;quot;stylesheet&amp;quot;
          href=&amp;quot;https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css&amp;quot;&amp;gt;
    &amp;lt;script src=&amp;quot;https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js&amp;quot;&amp;gt;&amp;lt;/script&amp;gt;

    &amp;lt;script src=&amp;quot;https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js&amp;quot;&amp;gt;&amp;lt;/script&amp;gt;

    &amp;lt;style id=&amp;quot;language-style&amp;quot;&amp;gt;
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            &amp;lt;/style&amp;gt;

    &amp;lt;script&amp;gt;
        var tryItOutBaseUrl = &amp;quot;http://tickets-api.test&amp;quot;;
        var useCsrf = Boolean();
        var csrfUrl = &amp;quot;/sanctum/csrf-cookie&amp;quot;;
    &amp;lt;/script&amp;gt;
    &amp;lt;script src=&amp;quot;http://tickets-api.test/vendor/scribe/js/tryitout-4.36.0.js&amp;quot;&amp;gt;&amp;lt;/script&amp;gt;

    &amp;lt;script src=&amp;quot;http://tickets-api.test/vendor/scribe/js/theme-default-4.36.0.js&amp;quot;&amp;gt;&amp;lt;/script&amp;gt;

&amp;lt;/head&amp;gt;

&amp;lt;body data-languages=&amp;quot;[&amp;amp;quot;bash&amp;amp;quot;,&amp;amp;quot;javascript&amp;amp;quot;]&amp;quot;&amp;gt;

&amp;lt;a href=&amp;quot;#&amp;quot; id=&amp;quot;nav-button&amp;quot;&amp;gt;
    &amp;lt;span&amp;gt;
        MENU
        &amp;lt;img src=&amp;quot;http://tickets-api.test/vendor/scribe/images/navbar.png&amp;quot; alt=&amp;quot;navbar-image&amp;quot;/&amp;gt;
    &amp;lt;/span&amp;gt;
&amp;lt;/a&amp;gt;
&amp;lt;div class=&amp;quot;tocify-wrapper&amp;quot;&amp;gt;
    
            &amp;lt;div class=&amp;quot;lang-selector&amp;quot;&amp;gt;
                                            &amp;lt;button type=&amp;quot;button&amp;quot; class=&amp;quot;lang-button&amp;quot; data-language-name=&amp;quot;bash&amp;quot;&amp;gt;bash&amp;lt;/button&amp;gt;
                                            &amp;lt;button type=&amp;quot;button&amp;quot; class=&amp;quot;lang-button&amp;quot; data-language-name=&amp;quot;javascript&amp;quot;&amp;gt;javascript&amp;lt;/button&amp;gt;
                    &amp;lt;/div&amp;gt;
    
    &amp;lt;div class=&amp;quot;search&amp;quot;&amp;gt;
        &amp;lt;input type=&amp;quot;text&amp;quot; class=&amp;quot;search&amp;quot; id=&amp;quot;input-search&amp;quot; placeholder=&amp;quot;Search&amp;quot;&amp;gt;
    &amp;lt;/div&amp;gt;

    &amp;lt;div id=&amp;quot;toc&amp;quot;&amp;gt;
                    &amp;lt;ul id=&amp;quot;tocify-header-introduction&amp;quot; class=&amp;quot;tocify-header&amp;quot;&amp;gt;
                &amp;lt;li class=&amp;quot;tocify-item level-1&amp;quot; data-unique=&amp;quot;introduction&amp;quot;&amp;gt;
                    &amp;lt;a href=&amp;quot;#introduction&amp;quot;&amp;gt;Introduction&amp;lt;/a&amp;gt;
                &amp;lt;/li&amp;gt;
                            &amp;lt;/ul&amp;gt;
                    &amp;lt;ul id=&amp;quot;tocify-header-authenticating-requests&amp;quot; class=&amp;quot;tocify-header&amp;quot;&amp;gt;
                &amp;lt;li class=&amp;quot;tocify-item level-1&amp;quot; data-unique=&amp;quot;authenticating-requests&amp;quot;&amp;gt;
                    &amp;lt;a href=&amp;quot;#authenticating-requests&amp;quot;&amp;gt;Authenticating requests&amp;lt;/a&amp;gt;
                &amp;lt;/li&amp;gt;
                            &amp;lt;/ul&amp;gt;
                    &amp;lt;ul id=&amp;quot;tocify-header-authentication&amp;quot; class=&amp;quot;tocify-header&amp;quot;&amp;gt;
                &amp;lt;li class=&amp;quot;tocify-item level-1&amp;quot; data-unique=&amp;quot;authentication&amp;quot;&amp;gt;
                    &amp;lt;a href=&amp;quot;#authentication&amp;quot;&amp;gt;Authentication&amp;lt;/a&amp;gt;
                &amp;lt;/li&amp;gt;
                                    &amp;lt;ul id=&amp;quot;tocify-subheader-authentication&amp;quot; class=&amp;quot;tocify-subheader&amp;quot;&amp;gt;
                                                    &amp;lt;li class=&amp;quot;tocify-item level-2&amp;quot; data-unique=&amp;quot;authentication-POSTapi-login&amp;quot;&amp;gt;
                                &amp;lt;a href=&amp;quot;#authentication-POSTapi-login&amp;quot;&amp;gt;Login
Authenticates the user and returns a API token&amp;lt;/a&amp;gt;
                            &amp;lt;/li&amp;gt;
                                                                                &amp;lt;li class=&amp;quot;tocify-item level-2&amp;quot; data-unique=&amp;quot;authentication-POSTapi-logout&amp;quot;&amp;gt;
                                &amp;lt;a href=&amp;quot;#authentication-POSTapi-logout&amp;quot;&amp;gt;Logout
Signs out the current user and destroys the API token&amp;lt;/a&amp;gt;
                            &amp;lt;/li&amp;gt;
                                                                        &amp;lt;/ul&amp;gt;
                            &amp;lt;/ul&amp;gt;
                    &amp;lt;ul id=&amp;quot;tocify-header-endpoints&amp;quot; class=&amp;quot;tocify-header&amp;quot;&amp;gt;
                &amp;lt;li class=&amp;quot;tocify-item level-1&amp;quot; data-unique=&amp;quot;endpoints&amp;quot;&amp;gt;
                    &amp;lt;a href=&amp;quot;#endpoints&amp;quot;&amp;gt;Endpoints&amp;lt;/a&amp;gt;
                &amp;lt;/li&amp;gt;
                                    &amp;lt;ul id=&amp;quot;tocify-subheader-endpoints&amp;quot; class=&amp;quot;tocify-subheader&amp;quot;&amp;gt;
                                                    &amp;lt;li class=&amp;quot;tocify-item level-2&amp;quot; data-unique=&amp;quot;endpoints-POSTapi-register&amp;quot;&amp;gt;
                                &amp;lt;a href=&amp;quot;#endpoints-POSTapi-register&amp;quot;&amp;gt;POST api/register&amp;lt;/a&amp;gt;
                            &amp;lt;/li&amp;gt;
                                                                                &amp;lt;li class=&amp;quot;tocify-item level-2&amp;quot; data-unique=&amp;quot;endpoints-GETapi-user&amp;quot;&amp;gt;
                                &amp;lt;a href=&amp;quot;#endpoints-GETapi-user&amp;quot;&amp;gt;GET api/user&amp;lt;/a&amp;gt;
                            &amp;lt;/li&amp;gt;
                                                                                &amp;lt;li class=&amp;quot;tocify-item level-2&amp;quot; data-unique=&amp;quot;endpoints-GETapi-docs-v1&amp;quot;&amp;gt;
                                &amp;lt;a href=&amp;quot;#endpoints-GETapi-docs-v1&amp;quot;&amp;gt;Invoke the controller method.&amp;lt;/a&amp;gt;
                            &amp;lt;/li&amp;gt;
                                                                                &amp;lt;li class=&amp;quot;tocify-item level-2&amp;quot; data-unique=&amp;quot;endpoints-GETapi-v1-tickets--id-&amp;quot;&amp;gt;
                                &amp;lt;a href=&amp;quot;#endpoints-GETapi-v1-tickets--id-&amp;quot;&amp;gt;Display the specified resource.&amp;lt;/a&amp;gt;
                            &amp;lt;/li&amp;gt;
                                                                                &amp;lt;li class=&amp;quot;tocify-item level-2&amp;quot; data-unique=&amp;quot;endpoints-DELETEapi-v1-tickets--id-&amp;quot;&amp;gt;
                                &amp;lt;a href=&amp;quot;#endpoints-DELETEapi-v1-tickets--id-&amp;quot;&amp;gt;Remove the specified resource from storage.&amp;lt;/a&amp;gt;
                            &amp;lt;/li&amp;gt;
                                                                                &amp;lt;li class=&amp;quot;tocify-item level-2&amp;quot; data-unique=&amp;quot;endpoints-PUTapi-v1-tickets--ticket_id-&amp;quot;&amp;gt;
                                &amp;lt;a href=&amp;quot;#endpoints-PUTapi-v1-tickets--ticket_id-&amp;quot;&amp;gt;PUT api/v1/tickets/{ticket_id}&amp;lt;/a&amp;gt;
                            &amp;lt;/li&amp;gt;
                                                                                &amp;lt;li class=&amp;quot;tocify-item level-2&amp;quot; data-unique=&amp;quot;endpoints-PATCHapi-v1-tickets--ticket_id-&amp;quot;&amp;gt;
                                &amp;lt;a href=&amp;quot;#endpoints-PATCHapi-v1-tickets--ticket_id-&amp;quot;&amp;gt;Update the specified resource in storage.&amp;lt;/a&amp;gt;
                            &amp;lt;/li&amp;gt;
                                                                                &amp;lt;li class=&amp;quot;tocify-item level-2&amp;quot; data-unique=&amp;quot;endpoints-GETapi-v1-users&amp;quot;&amp;gt;
                                &amp;lt;a href=&amp;quot;#endpoints-GETapi-v1-users&amp;quot;&amp;gt;Display a listing of the resource.&amp;lt;/a&amp;gt;
                            &amp;lt;/li&amp;gt;
                                                                                &amp;lt;li class=&amp;quot;tocify-item level-2&amp;quot; data-unique=&amp;quot;endpoints-POSTapi-v1-users&amp;quot;&amp;gt;
                                &amp;lt;a href=&amp;quot;#endpoints-POSTapi-v1-users&amp;quot;&amp;gt;Store a newly created resource in storage.&amp;lt;/a&amp;gt;
                            &amp;lt;/li&amp;gt;
                                                                                &amp;lt;li class=&amp;quot;tocify-item level-2&amp;quot; data-unique=&amp;quot;endpoints-GETapi-v1-users--id-&amp;quot;&amp;gt;
                                &amp;lt;a href=&amp;quot;#endpoints-GETapi-v1-users--id-&amp;quot;&amp;gt;Display the specified resource.&amp;lt;/a&amp;gt;
                            &amp;lt;/li&amp;gt;
                                                                                &amp;lt;li class=&amp;quot;tocify-item level-2&amp;quot; data-unique=&amp;quot;endpoints-DELETEapi-v1-users--id-&amp;quot;&amp;gt;
                                &amp;lt;a href=&amp;quot;#endpoints-DELETEapi-v1-users--id-&amp;quot;&amp;gt;Remove the specified resource from storage.&amp;lt;/a&amp;gt;
                            &amp;lt;/li&amp;gt;
                                                                                &amp;lt;li class=&amp;quot;tocify-item level-2&amp;quot; data-unique=&amp;quot;endpoints-PUTapi-v1-users--user_id-&amp;quot;&amp;gt;
                                &amp;lt;a href=&amp;quot;#endpoints-PUTapi-v1-users--user_id-&amp;quot;&amp;gt;PUT api/v1/users/{user_id}&amp;lt;/a&amp;gt;
                            &amp;lt;/li&amp;gt;
                                                                                &amp;lt;li class=&amp;quot;tocify-item level-2&amp;quot; data-unique=&amp;quot;endpoints-PATCHapi-v1-users--user_id-&amp;quot;&amp;gt;
                                &amp;lt;a href=&amp;quot;#endpoints-PATCHapi-v1-users--user_id-&amp;quot;&amp;gt;Update the specified resource in storage.&amp;lt;/a&amp;gt;
                            &amp;lt;/li&amp;gt;
                                                                                &amp;lt;li class=&amp;quot;tocify-item level-2&amp;quot; data-unique=&amp;quot;endpoints-GETapi-v1-authors&amp;quot;&amp;gt;
                                &amp;lt;a href=&amp;quot;#endpoints-GETapi-v1-authors&amp;quot;&amp;gt;Display a listing of the resource.&amp;lt;/a&amp;gt;
                            &amp;lt;/li&amp;gt;
                                                                                &amp;lt;li class=&amp;quot;tocify-item level-2&amp;quot; data-unique=&amp;quot;endpoints-GETapi-v1-authors--id-&amp;quot;&amp;gt;
                                &amp;lt;a href=&amp;quot;#endpoints-GETapi-v1-authors--id-&amp;quot;&amp;gt;Display the specified resource.&amp;lt;/a&amp;gt;
                            &amp;lt;/li&amp;gt;
                                                                                &amp;lt;li class=&amp;quot;tocify-item level-2&amp;quot; data-unique=&amp;quot;endpoints-DELETEapi-v1-authors--id-&amp;quot;&amp;gt;
                                &amp;lt;a href=&amp;quot;#endpoints-DELETEapi-v1-authors--id-&amp;quot;&amp;gt;Remove the specified resource from storage.&amp;lt;/a&amp;gt;
                            &amp;lt;/li&amp;gt;
                                                                                &amp;lt;li class=&amp;quot;tocify-item level-2&amp;quot; data-unique=&amp;quot;endpoints-GETapi-v1-authors--author_id--tickets&amp;quot;&amp;gt;
                                &amp;lt;a href=&amp;quot;#endpoints-GETapi-v1-authors--author_id--tickets&amp;quot;&amp;gt;GET api/v1/authors/{author_id}/tickets&amp;lt;/a&amp;gt;
                            &amp;lt;/li&amp;gt;
                                                                                &amp;lt;li class=&amp;quot;tocify-item level-2&amp;quot; data-unique=&amp;quot;endpoints-POSTapi-v1-authors--author_id--tickets&amp;quot;&amp;gt;
                                &amp;lt;a href=&amp;quot;#endpoints-POSTapi-v1-authors--author_id--tickets&amp;quot;&amp;gt;Store a newly created resource in storage.&amp;lt;/a&amp;gt;
                            &amp;lt;/li&amp;gt;
                                                                                &amp;lt;li class=&amp;quot;tocify-item level-2&amp;quot; data-unique=&amp;quot;endpoints-DELETEapi-v1-authors--author_id--tickets--id-&amp;quot;&amp;gt;
                                &amp;lt;a href=&amp;quot;#endpoints-DELETEapi-v1-authors--author_id--tickets--id-&amp;quot;&amp;gt;DELETE api/v1/authors/{author_id}/tickets/{id}&amp;lt;/a&amp;gt;
                            &amp;lt;/li&amp;gt;
                                                                                &amp;lt;li class=&amp;quot;tocify-item level-2&amp;quot; data-unique=&amp;quot;endpoints-PUTapi-v1-authors--author_id--tickets--ticket_id-&amp;quot;&amp;gt;
                                &amp;lt;a href=&amp;quot;#endpoints-PUTapi-v1-authors--author_id--tickets--ticket_id-&amp;quot;&amp;gt;PUT api/v1/authors/{author_id}/tickets/{ticket_id}&amp;lt;/a&amp;gt;
                            &amp;lt;/li&amp;gt;
                                                                                &amp;lt;li class=&amp;quot;tocify-item level-2&amp;quot; data-unique=&amp;quot;endpoints-PATCHapi-v1-authors--author_id--tickets--ticket_id-&amp;quot;&amp;gt;
                                &amp;lt;a href=&amp;quot;#endpoints-PATCHapi-v1-authors--author_id--tickets--ticket_id-&amp;quot;&amp;gt;PATCH api/v1/authors/{author_id}/tickets/{ticket_id}&amp;lt;/a&amp;gt;
                            &amp;lt;/li&amp;gt;
                                                                        &amp;lt;/ul&amp;gt;
                            &amp;lt;/ul&amp;gt;
                    &amp;lt;ul id=&amp;quot;tocify-header-managing-tickets&amp;quot; class=&amp;quot;tocify-header&amp;quot;&amp;gt;
                &amp;lt;li class=&amp;quot;tocify-item level-1&amp;quot; data-unique=&amp;quot;managing-tickets&amp;quot;&amp;gt;
                    &amp;lt;a href=&amp;quot;#managing-tickets&amp;quot;&amp;gt;Managing Tickets&amp;lt;/a&amp;gt;
                &amp;lt;/li&amp;gt;
                                    &amp;lt;ul id=&amp;quot;tocify-subheader-managing-tickets&amp;quot; class=&amp;quot;tocify-subheader&amp;quot;&amp;gt;
                                                    &amp;lt;li class=&amp;quot;tocify-item level-2&amp;quot; data-unique=&amp;quot;managing-tickets-GETapi-v1-tickets&amp;quot;&amp;gt;
                                &amp;lt;a href=&amp;quot;#managing-tickets-GETapi-v1-tickets&amp;quot;&amp;gt;Get All Tickets.&amp;lt;/a&amp;gt;
                            &amp;lt;/li&amp;gt;
                                                                                &amp;lt;li class=&amp;quot;tocify-item level-2&amp;quot; data-unique=&amp;quot;managing-tickets-POSTapi-v1-tickets&amp;quot;&amp;gt;
                                &amp;lt;a href=&amp;quot;#managing-tickets-POSTapi-v1-tickets&amp;quot;&amp;gt;Create a Ticket.&amp;lt;/a&amp;gt;
                            &amp;lt;/li&amp;gt;
                                                                        &amp;lt;/ul&amp;gt;
                            &amp;lt;/ul&amp;gt;
            &amp;lt;/div&amp;gt;

    &amp;lt;ul class=&amp;quot;toc-footer&amp;quot; id=&amp;quot;toc-footer&amp;quot;&amp;gt;
                    &amp;lt;li style=&amp;quot;padding-bottom: 5px;&amp;quot;&amp;gt;&amp;lt;a href=&amp;quot;http://tickets-api.test/docs.postman&amp;quot;&amp;gt;View Postman collection&amp;lt;/a&amp;gt;&amp;lt;/li&amp;gt;
                            &amp;lt;li style=&amp;quot;padding-bottom: 5px;&amp;quot;&amp;gt;&amp;lt;a href=&amp;quot;http://tickets-api.test/docs.openapi&amp;quot;&amp;gt;View OpenAPI spec&amp;lt;/a&amp;gt;&amp;lt;/li&amp;gt;
                &amp;lt;li&amp;gt;&amp;lt;a href=&amp;quot;http://github.com/knuckleswtf/scribe&amp;quot;&amp;gt;Documentation powered by Scribe ✍&amp;lt;/a&amp;gt;&amp;lt;/li&amp;gt;
    &amp;lt;/ul&amp;gt;

    &amp;lt;ul class=&amp;quot;toc-footer&amp;quot; id=&amp;quot;last-updated&amp;quot;&amp;gt;
        &amp;lt;li&amp;gt;Last updated: June 5, 2024&amp;lt;/li&amp;gt;
    &amp;lt;/ul&amp;gt;
&amp;lt;/div&amp;gt;

&amp;lt;div class=&amp;quot;page-wrapper&amp;quot;&amp;gt;
    &amp;lt;div class=&amp;quot;dark-box&amp;quot;&amp;gt;&amp;lt;/div&amp;gt;
    &amp;lt;div class=&amp;quot;content&amp;quot;&amp;gt;
        &amp;lt;h1 id=&amp;quot;introduction&amp;quot;&amp;gt;Introduction&amp;lt;/h1&amp;gt;
&amp;lt;aside&amp;gt;
    &amp;lt;strong&amp;gt;Base URL&amp;lt;/strong&amp;gt;: &amp;lt;code&amp;gt;http://tickets-api.test&amp;lt;/code&amp;gt;
&amp;lt;/aside&amp;gt;
&amp;lt;p&amp;gt;This documentation aims to provide all the information you need to work with our API.&amp;lt;/p&amp;gt;
&amp;lt;aside&amp;gt;As you scroll, you&amp;#039;ll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&amp;lt;/aside&amp;gt;

        &amp;lt;h1 id=&amp;quot;authenticating-requests&amp;quot;&amp;gt;Authenticating requests&amp;lt;/h1&amp;gt;
&amp;lt;p&amp;gt;To authenticate requests, include an &amp;lt;strong&amp;gt;&amp;lt;code&amp;gt;Authorization&amp;lt;/code&amp;gt;&amp;lt;/strong&amp;gt; header with the value &amp;lt;strong&amp;gt;&amp;lt;code&amp;gt;&amp;quot;Bearer {YOUR_AUTH_KEY}&amp;quot;&amp;lt;/code&amp;gt;&amp;lt;/strong&amp;gt;.&amp;lt;/p&amp;gt;
&amp;lt;p&amp;gt;All authenticated endpoints are marked with a &amp;lt;code&amp;gt;requires authentication&amp;lt;/code&amp;gt; badge in the documentation below.&amp;lt;/p&amp;gt;
&amp;lt;p&amp;gt;You can retrieve your token by visiting your dashboard and clicking &amp;lt;b&amp;gt;Generate API token&amp;lt;/b&amp;gt;.&amp;lt;/p&amp;gt;

        &amp;lt;h1 id=&amp;quot;authentication&amp;quot;&amp;gt;Authentication&amp;lt;/h1&amp;gt;

    

                                &amp;lt;h2 id=&amp;quot;authentication-POSTapi-login&amp;quot;&amp;gt;Login
Authenticates the user and returns a API token&amp;lt;/h2&amp;gt;

&amp;lt;p&amp;gt;
&amp;lt;small class=&amp;quot;badge badge-darkred&amp;quot;&amp;gt;requires authentication&amp;lt;/small&amp;gt;
&amp;lt;/p&amp;gt;



&amp;lt;span id=&amp;quot;example-requests-POSTapi-login&amp;quot;&amp;gt;
&amp;lt;blockquote&amp;gt;Example request:&amp;lt;/blockquote&amp;gt;


&amp;lt;div class=&amp;quot;bash-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-bash&amp;quot;&amp;gt;curl --request POST \
    &amp;quot;http://tickets-api.test/api/login&amp;quot; \
    --header &amp;quot;Authorization: Bearer {YOUR_AUTH_KEY}&amp;quot; \
    --header &amp;quot;Content-Type: application/json&amp;quot; \
    --header &amp;quot;Accept: application/json&amp;quot; \
    --data &amp;quot;{
    \&amp;quot;email\&amp;quot;: \&amp;quot;bfeil@example.net\&amp;quot;,
    \&amp;quot;password\&amp;quot;: \&amp;quot;%?fAFs&amp;amp;amp;3K=\&amp;#039;\&amp;#039;*\&amp;quot;
}&amp;quot;
&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;


&amp;lt;div class=&amp;quot;javascript-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-javascript&amp;quot;&amp;gt;const url = new URL(
    &amp;quot;http://tickets-api.test/api/login&amp;quot;
);

const headers = {
    &amp;quot;Authorization&amp;quot;: &amp;quot;Bearer {YOUR_AUTH_KEY}&amp;quot;,
    &amp;quot;Content-Type&amp;quot;: &amp;quot;application/json&amp;quot;,
    &amp;quot;Accept&amp;quot;: &amp;quot;application/json&amp;quot;,
};

let body = {
    &amp;quot;email&amp;quot;: &amp;quot;bfeil@example.net&amp;quot;,
    &amp;quot;password&amp;quot;: &amp;quot;%?fAFs&amp;amp;amp;3K=&amp;#039;&amp;#039;*&amp;quot;
};

fetch(url, {
    method: &amp;quot;POST&amp;quot;,
    headers,
    body: JSON.stringify(body),
}).then(response =&amp;amp;gt; response.json());&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;

&amp;lt;/span&amp;gt;

&amp;lt;span id=&amp;quot;example-responses-POSTapi-login&amp;quot;&amp;gt;
            &amp;lt;blockquote&amp;gt;
            &amp;lt;p&amp;gt;Example response (200):&amp;lt;/p&amp;gt;
        &amp;lt;/blockquote&amp;gt;
                &amp;lt;pre&amp;gt;

&amp;lt;code class=&amp;quot;language-json&amp;quot; style=&amp;quot;max-height: 300px;&amp;quot;&amp;gt;{
    &amp;amp;quot;data&amp;amp;quot;: {
        &amp;amp;quot;token&amp;amp;quot;: &amp;amp;quot;{YOUR_AUTH_KEY}&amp;amp;quot;
    },
    &amp;amp;quot;message&amp;amp;quot;: &amp;amp;quot;Authenticated&amp;amp;quot;,
    &amp;amp;quot;status&amp;amp;quot;: 200
}&amp;lt;/code&amp;gt;
 &amp;lt;/pre&amp;gt;
    &amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-results-POSTapi-login&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Received response&amp;lt;span
                id=&amp;quot;execution-response-status-POSTapi-login&amp;quot;&amp;gt;&amp;lt;/span&amp;gt;:
    &amp;lt;/blockquote&amp;gt;
    &amp;lt;pre class=&amp;quot;json&amp;quot;&amp;gt;&amp;lt;code id=&amp;quot;execution-response-content-POSTapi-login&amp;quot;
      data-empty-response-text=&amp;quot;&amp;lt;Empty response&amp;gt;&amp;quot; style=&amp;quot;max-height: 400px;&amp;quot;&amp;gt;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-error-POSTapi-login&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Request failed with error:&amp;lt;/blockquote&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code id=&amp;quot;execution-error-message-POSTapi-login&amp;quot;&amp;gt;

Tip: Check that you&amp;amp;#039;re properly connected to the network.
If you&amp;amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;form id=&amp;quot;form-POSTapi-login&amp;quot; data-method=&amp;quot;POST&amp;quot;
      data-path=&amp;quot;api/login&amp;quot;
      data-authed=&amp;quot;1&amp;quot;
      data-hasfiles=&amp;quot;0&amp;quot;
      data-isarraybody=&amp;quot;0&amp;quot;
      autocomplete=&amp;quot;off&amp;quot;
      onsubmit=&amp;quot;event.preventDefault(); executeTryOut(&amp;#039;POSTapi-login&amp;#039;, this);&amp;quot;&amp;gt;
    &amp;lt;h3&amp;gt;
        Request&amp;amp;nbsp;&amp;amp;nbsp;&amp;amp;nbsp;
                    &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-tryout-POSTapi-login&amp;quot;
                    onclick=&amp;quot;tryItOut(&amp;#039;POSTapi-login&amp;#039;);&amp;quot;&amp;gt;Try it out ⚡
            &amp;lt;/button&amp;gt;
            &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-canceltryout-POSTapi-login&amp;quot;
                    onclick=&amp;quot;cancelTryOut(&amp;#039;POSTapi-login&amp;#039;);&amp;quot; hidden&amp;gt;Cancel 🛑
            &amp;lt;/button&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
            &amp;lt;button type=&amp;quot;submit&amp;quot;
                    style=&amp;quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-executetryout-POSTapi-login&amp;quot;
                    data-initial-text=&amp;quot;Send Request 💥&amp;quot;
                    data-loading-text=&amp;quot;⏱ Sending...&amp;quot;
                    hidden&amp;gt;Send Request 💥
            &amp;lt;/button&amp;gt;
            &amp;lt;/h3&amp;gt;
            &amp;lt;p&amp;gt;
            &amp;lt;small class=&amp;quot;badge badge-black&amp;quot;&amp;gt;POST&amp;lt;/small&amp;gt;
            &amp;lt;b&amp;gt;&amp;lt;code&amp;gt;api/login&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;
        &amp;lt;/p&amp;gt;
                &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;Headers&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Authorization&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Authorization&amp;quot; class=&amp;quot;auth-value&amp;quot;               data-endpoint=&amp;quot;POSTapi-login&amp;quot;
               value=&amp;quot;Bearer {YOUR_AUTH_KEY}&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;Bearer {YOUR_AUTH_KEY}&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Content-Type&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Content-Type&amp;quot;                data-endpoint=&amp;quot;POSTapi-login&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Accept&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Accept&amp;quot;                data-endpoint=&amp;quot;POSTapi-login&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;Body Parameters&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
        &amp;lt;div style=&amp;quot; padding-left: 28px;  clear: unset;&amp;quot;&amp;gt;
            &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;email&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;string&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;email&amp;quot;                data-endpoint=&amp;quot;POSTapi-login&amp;quot;
               value=&amp;quot;bfeil@example.net&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Must be a valid email address. Example: &amp;lt;code&amp;gt;bfeil@example.net&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
        &amp;lt;/div&amp;gt;
                &amp;lt;div style=&amp;quot; padding-left: 28px;  clear: unset;&amp;quot;&amp;gt;
            &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;password&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;string&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;password&amp;quot;                data-endpoint=&amp;quot;POSTapi-login&amp;quot;
               value=&amp;quot;%?fAFs&amp;amp;3K=&amp;#039;&amp;#039;*&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Must be at least 8 characters. Example: &amp;lt;code&amp;gt;%?fAFs&amp;amp;amp;3K=&amp;#039;&amp;#039;*&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
        &amp;lt;/div&amp;gt;
        &amp;lt;/form&amp;gt;

                    &amp;lt;h2 id=&amp;quot;authentication-POSTapi-logout&amp;quot;&amp;gt;Logout
Signs out the current user and destroys the API token&amp;lt;/h2&amp;gt;

&amp;lt;p&amp;gt;
&amp;lt;small class=&amp;quot;badge badge-darkred&amp;quot;&amp;gt;requires authentication&amp;lt;/small&amp;gt;
&amp;lt;/p&amp;gt;



&amp;lt;span id=&amp;quot;example-requests-POSTapi-logout&amp;quot;&amp;gt;
&amp;lt;blockquote&amp;gt;Example request:&amp;lt;/blockquote&amp;gt;


&amp;lt;div class=&amp;quot;bash-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-bash&amp;quot;&amp;gt;curl --request POST \
    &amp;quot;http://tickets-api.test/api/logout&amp;quot; \
    --header &amp;quot;Authorization: Bearer {YOUR_AUTH_KEY}&amp;quot; \
    --header &amp;quot;Content-Type: application/json&amp;quot; \
    --header &amp;quot;Accept: application/json&amp;quot;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;


&amp;lt;div class=&amp;quot;javascript-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-javascript&amp;quot;&amp;gt;const url = new URL(
    &amp;quot;http://tickets-api.test/api/logout&amp;quot;
);

const headers = {
    &amp;quot;Authorization&amp;quot;: &amp;quot;Bearer {YOUR_AUTH_KEY}&amp;quot;,
    &amp;quot;Content-Type&amp;quot;: &amp;quot;application/json&amp;quot;,
    &amp;quot;Accept&amp;quot;: &amp;quot;application/json&amp;quot;,
};

fetch(url, {
    method: &amp;quot;POST&amp;quot;,
    headers,
}).then(response =&amp;amp;gt; response.json());&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;

&amp;lt;/span&amp;gt;

&amp;lt;span id=&amp;quot;example-responses-POSTapi-logout&amp;quot;&amp;gt;
            &amp;lt;blockquote&amp;gt;
            &amp;lt;p&amp;gt;Example response (200):&amp;lt;/p&amp;gt;
        &amp;lt;/blockquote&amp;gt;
                &amp;lt;pre&amp;gt;

&amp;lt;code class=&amp;quot;language-json&amp;quot; style=&amp;quot;max-height: 300px;&amp;quot;&amp;gt;{}&amp;lt;/code&amp;gt;
 &amp;lt;/pre&amp;gt;
    &amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-results-POSTapi-logout&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Received response&amp;lt;span
                id=&amp;quot;execution-response-status-POSTapi-logout&amp;quot;&amp;gt;&amp;lt;/span&amp;gt;:
    &amp;lt;/blockquote&amp;gt;
    &amp;lt;pre class=&amp;quot;json&amp;quot;&amp;gt;&amp;lt;code id=&amp;quot;execution-response-content-POSTapi-logout&amp;quot;
      data-empty-response-text=&amp;quot;&amp;lt;Empty response&amp;gt;&amp;quot; style=&amp;quot;max-height: 400px;&amp;quot;&amp;gt;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-error-POSTapi-logout&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Request failed with error:&amp;lt;/blockquote&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code id=&amp;quot;execution-error-message-POSTapi-logout&amp;quot;&amp;gt;

Tip: Check that you&amp;amp;#039;re properly connected to the network.
If you&amp;amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;form id=&amp;quot;form-POSTapi-logout&amp;quot; data-method=&amp;quot;POST&amp;quot;
      data-path=&amp;quot;api/logout&amp;quot;
      data-authed=&amp;quot;1&amp;quot;
      data-hasfiles=&amp;quot;0&amp;quot;
      data-isarraybody=&amp;quot;0&amp;quot;
      autocomplete=&amp;quot;off&amp;quot;
      onsubmit=&amp;quot;event.preventDefault(); executeTryOut(&amp;#039;POSTapi-logout&amp;#039;, this);&amp;quot;&amp;gt;
    &amp;lt;h3&amp;gt;
        Request&amp;amp;nbsp;&amp;amp;nbsp;&amp;amp;nbsp;
                    &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-tryout-POSTapi-logout&amp;quot;
                    onclick=&amp;quot;tryItOut(&amp;#039;POSTapi-logout&amp;#039;);&amp;quot;&amp;gt;Try it out ⚡
            &amp;lt;/button&amp;gt;
            &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-canceltryout-POSTapi-logout&amp;quot;
                    onclick=&amp;quot;cancelTryOut(&amp;#039;POSTapi-logout&amp;#039;);&amp;quot; hidden&amp;gt;Cancel 🛑
            &amp;lt;/button&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
            &amp;lt;button type=&amp;quot;submit&amp;quot;
                    style=&amp;quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-executetryout-POSTapi-logout&amp;quot;
                    data-initial-text=&amp;quot;Send Request 💥&amp;quot;
                    data-loading-text=&amp;quot;⏱ Sending...&amp;quot;
                    hidden&amp;gt;Send Request 💥
            &amp;lt;/button&amp;gt;
            &amp;lt;/h3&amp;gt;
            &amp;lt;p&amp;gt;
            &amp;lt;small class=&amp;quot;badge badge-black&amp;quot;&amp;gt;POST&amp;lt;/small&amp;gt;
            &amp;lt;b&amp;gt;&amp;lt;code&amp;gt;api/logout&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;
        &amp;lt;/p&amp;gt;
                &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;Headers&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Authorization&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Authorization&amp;quot; class=&amp;quot;auth-value&amp;quot;               data-endpoint=&amp;quot;POSTapi-logout&amp;quot;
               value=&amp;quot;Bearer {YOUR_AUTH_KEY}&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;Bearer {YOUR_AUTH_KEY}&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Content-Type&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Content-Type&amp;quot;                data-endpoint=&amp;quot;POSTapi-logout&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Accept&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Accept&amp;quot;                data-endpoint=&amp;quot;POSTapi-logout&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                        &amp;lt;/form&amp;gt;

                &amp;lt;h1 id=&amp;quot;endpoints&amp;quot;&amp;gt;Endpoints&amp;lt;/h1&amp;gt;

    

                                &amp;lt;h2 id=&amp;quot;endpoints-POSTapi-register&amp;quot;&amp;gt;POST api/register&amp;lt;/h2&amp;gt;

&amp;lt;p&amp;gt;
&amp;lt;small class=&amp;quot;badge badge-darkred&amp;quot;&amp;gt;requires authentication&amp;lt;/small&amp;gt;
&amp;lt;/p&amp;gt;



&amp;lt;span id=&amp;quot;example-requests-POSTapi-register&amp;quot;&amp;gt;
&amp;lt;blockquote&amp;gt;Example request:&amp;lt;/blockquote&amp;gt;


&amp;lt;div class=&amp;quot;bash-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-bash&amp;quot;&amp;gt;curl --request POST \
    &amp;quot;http://tickets-api.test/api/register&amp;quot; \
    --header &amp;quot;Authorization: Bearer {YOUR_AUTH_KEY}&amp;quot; \
    --header &amp;quot;Content-Type: application/json&amp;quot; \
    --header &amp;quot;Accept: application/json&amp;quot;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;


&amp;lt;div class=&amp;quot;javascript-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-javascript&amp;quot;&amp;gt;const url = new URL(
    &amp;quot;http://tickets-api.test/api/register&amp;quot;
);

const headers = {
    &amp;quot;Authorization&amp;quot;: &amp;quot;Bearer {YOUR_AUTH_KEY}&amp;quot;,
    &amp;quot;Content-Type&amp;quot;: &amp;quot;application/json&amp;quot;,
    &amp;quot;Accept&amp;quot;: &amp;quot;application/json&amp;quot;,
};

fetch(url, {
    method: &amp;quot;POST&amp;quot;,
    headers,
}).then(response =&amp;amp;gt; response.json());&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;

&amp;lt;/span&amp;gt;

&amp;lt;span id=&amp;quot;example-responses-POSTapi-register&amp;quot;&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-results-POSTapi-register&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Received response&amp;lt;span
                id=&amp;quot;execution-response-status-POSTapi-register&amp;quot;&amp;gt;&amp;lt;/span&amp;gt;:
    &amp;lt;/blockquote&amp;gt;
    &amp;lt;pre class=&amp;quot;json&amp;quot;&amp;gt;&amp;lt;code id=&amp;quot;execution-response-content-POSTapi-register&amp;quot;
      data-empty-response-text=&amp;quot;&amp;lt;Empty response&amp;gt;&amp;quot; style=&amp;quot;max-height: 400px;&amp;quot;&amp;gt;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-error-POSTapi-register&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Request failed with error:&amp;lt;/blockquote&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code id=&amp;quot;execution-error-message-POSTapi-register&amp;quot;&amp;gt;

Tip: Check that you&amp;amp;#039;re properly connected to the network.
If you&amp;amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;form id=&amp;quot;form-POSTapi-register&amp;quot; data-method=&amp;quot;POST&amp;quot;
      data-path=&amp;quot;api/register&amp;quot;
      data-authed=&amp;quot;1&amp;quot;
      data-hasfiles=&amp;quot;0&amp;quot;
      data-isarraybody=&amp;quot;0&amp;quot;
      autocomplete=&amp;quot;off&amp;quot;
      onsubmit=&amp;quot;event.preventDefault(); executeTryOut(&amp;#039;POSTapi-register&amp;#039;, this);&amp;quot;&amp;gt;
    &amp;lt;h3&amp;gt;
        Request&amp;amp;nbsp;&amp;amp;nbsp;&amp;amp;nbsp;
                    &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-tryout-POSTapi-register&amp;quot;
                    onclick=&amp;quot;tryItOut(&amp;#039;POSTapi-register&amp;#039;);&amp;quot;&amp;gt;Try it out ⚡
            &amp;lt;/button&amp;gt;
            &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-canceltryout-POSTapi-register&amp;quot;
                    onclick=&amp;quot;cancelTryOut(&amp;#039;POSTapi-register&amp;#039;);&amp;quot; hidden&amp;gt;Cancel 🛑
            &amp;lt;/button&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
            &amp;lt;button type=&amp;quot;submit&amp;quot;
                    style=&amp;quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-executetryout-POSTapi-register&amp;quot;
                    data-initial-text=&amp;quot;Send Request 💥&amp;quot;
                    data-loading-text=&amp;quot;⏱ Sending...&amp;quot;
                    hidden&amp;gt;Send Request 💥
            &amp;lt;/button&amp;gt;
            &amp;lt;/h3&amp;gt;
            &amp;lt;p&amp;gt;
            &amp;lt;small class=&amp;quot;badge badge-black&amp;quot;&amp;gt;POST&amp;lt;/small&amp;gt;
            &amp;lt;b&amp;gt;&amp;lt;code&amp;gt;api/register&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;
        &amp;lt;/p&amp;gt;
                &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;Headers&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Authorization&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Authorization&amp;quot; class=&amp;quot;auth-value&amp;quot;               data-endpoint=&amp;quot;POSTapi-register&amp;quot;
               value=&amp;quot;Bearer {YOUR_AUTH_KEY}&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;Bearer {YOUR_AUTH_KEY}&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Content-Type&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Content-Type&amp;quot;                data-endpoint=&amp;quot;POSTapi-register&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Accept&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Accept&amp;quot;                data-endpoint=&amp;quot;POSTapi-register&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                        &amp;lt;/form&amp;gt;

                    &amp;lt;h2 id=&amp;quot;endpoints-GETapi-user&amp;quot;&amp;gt;GET api/user&amp;lt;/h2&amp;gt;

&amp;lt;p&amp;gt;
&amp;lt;small class=&amp;quot;badge badge-darkred&amp;quot;&amp;gt;requires authentication&amp;lt;/small&amp;gt;
&amp;lt;/p&amp;gt;



&amp;lt;span id=&amp;quot;example-requests-GETapi-user&amp;quot;&amp;gt;
&amp;lt;blockquote&amp;gt;Example request:&amp;lt;/blockquote&amp;gt;


&amp;lt;div class=&amp;quot;bash-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-bash&amp;quot;&amp;gt;curl --request GET \
    --get &amp;quot;http://tickets-api.test/api/user&amp;quot; \
    --header &amp;quot;Authorization: Bearer {YOUR_AUTH_KEY}&amp;quot; \
    --header &amp;quot;Content-Type: application/json&amp;quot; \
    --header &amp;quot;Accept: application/json&amp;quot;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;


&amp;lt;div class=&amp;quot;javascript-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-javascript&amp;quot;&amp;gt;const url = new URL(
    &amp;quot;http://tickets-api.test/api/user&amp;quot;
);

const headers = {
    &amp;quot;Authorization&amp;quot;: &amp;quot;Bearer {YOUR_AUTH_KEY}&amp;quot;,
    &amp;quot;Content-Type&amp;quot;: &amp;quot;application/json&amp;quot;,
    &amp;quot;Accept&amp;quot;: &amp;quot;application/json&amp;quot;,
};

fetch(url, {
    method: &amp;quot;GET&amp;quot;,
    headers,
}).then(response =&amp;amp;gt; response.json());&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;

&amp;lt;/span&amp;gt;

&amp;lt;span id=&amp;quot;example-responses-GETapi-user&amp;quot;&amp;gt;
            &amp;lt;blockquote&amp;gt;
            &amp;lt;p&amp;gt;Example response (200):&amp;lt;/p&amp;gt;
        &amp;lt;/blockquote&amp;gt;
                &amp;lt;details class=&amp;quot;annotation&amp;quot;&amp;gt;
            &amp;lt;summary style=&amp;quot;cursor: pointer;&amp;quot;&amp;gt;
                &amp;lt;small onclick=&amp;quot;textContent = parentElement.parentElement.open ? &amp;#039;Show headers&amp;#039; : &amp;#039;Hide headers&amp;#039;&amp;quot;&amp;gt;Show headers&amp;lt;/small&amp;gt;
            &amp;lt;/summary&amp;gt;
            &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-http&amp;quot;&amp;gt;cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 &amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/details&amp;gt;         &amp;lt;pre&amp;gt;

&amp;lt;code class=&amp;quot;language-json&amp;quot; style=&amp;quot;max-height: 300px;&amp;quot;&amp;gt;{
    &amp;amp;quot;id&amp;amp;quot;: 13,
    &amp;amp;quot;name&amp;amp;quot;: &amp;amp;quot;Manager&amp;amp;quot;,
    &amp;amp;quot;email&amp;amp;quot;: &amp;amp;quot;manager@manager.com&amp;amp;quot;,
    &amp;amp;quot;email_verified_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;,
    &amp;amp;quot;is_manager&amp;amp;quot;: true,
    &amp;amp;quot;created_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;,
    &amp;amp;quot;updated_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;
}&amp;lt;/code&amp;gt;
 &amp;lt;/pre&amp;gt;
    &amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-results-GETapi-user&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Received response&amp;lt;span
                id=&amp;quot;execution-response-status-GETapi-user&amp;quot;&amp;gt;&amp;lt;/span&amp;gt;:
    &amp;lt;/blockquote&amp;gt;
    &amp;lt;pre class=&amp;quot;json&amp;quot;&amp;gt;&amp;lt;code id=&amp;quot;execution-response-content-GETapi-user&amp;quot;
      data-empty-response-text=&amp;quot;&amp;lt;Empty response&amp;gt;&amp;quot; style=&amp;quot;max-height: 400px;&amp;quot;&amp;gt;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-error-GETapi-user&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Request failed with error:&amp;lt;/blockquote&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code id=&amp;quot;execution-error-message-GETapi-user&amp;quot;&amp;gt;

Tip: Check that you&amp;amp;#039;re properly connected to the network.
If you&amp;amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;form id=&amp;quot;form-GETapi-user&amp;quot; data-method=&amp;quot;GET&amp;quot;
      data-path=&amp;quot;api/user&amp;quot;
      data-authed=&amp;quot;1&amp;quot;
      data-hasfiles=&amp;quot;0&amp;quot;
      data-isarraybody=&amp;quot;0&amp;quot;
      autocomplete=&amp;quot;off&amp;quot;
      onsubmit=&amp;quot;event.preventDefault(); executeTryOut(&amp;#039;GETapi-user&amp;#039;, this);&amp;quot;&amp;gt;
    &amp;lt;h3&amp;gt;
        Request&amp;amp;nbsp;&amp;amp;nbsp;&amp;amp;nbsp;
                    &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-tryout-GETapi-user&amp;quot;
                    onclick=&amp;quot;tryItOut(&amp;#039;GETapi-user&amp;#039;);&amp;quot;&amp;gt;Try it out ⚡
            &amp;lt;/button&amp;gt;
            &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-canceltryout-GETapi-user&amp;quot;
                    onclick=&amp;quot;cancelTryOut(&amp;#039;GETapi-user&amp;#039;);&amp;quot; hidden&amp;gt;Cancel 🛑
            &amp;lt;/button&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
            &amp;lt;button type=&amp;quot;submit&amp;quot;
                    style=&amp;quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-executetryout-GETapi-user&amp;quot;
                    data-initial-text=&amp;quot;Send Request 💥&amp;quot;
                    data-loading-text=&amp;quot;⏱ Sending...&amp;quot;
                    hidden&amp;gt;Send Request 💥
            &amp;lt;/button&amp;gt;
            &amp;lt;/h3&amp;gt;
            &amp;lt;p&amp;gt;
            &amp;lt;small class=&amp;quot;badge badge-green&amp;quot;&amp;gt;GET&amp;lt;/small&amp;gt;
            &amp;lt;b&amp;gt;&amp;lt;code&amp;gt;api/user&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;
        &amp;lt;/p&amp;gt;
                &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;Headers&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Authorization&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Authorization&amp;quot; class=&amp;quot;auth-value&amp;quot;               data-endpoint=&amp;quot;GETapi-user&amp;quot;
               value=&amp;quot;Bearer {YOUR_AUTH_KEY}&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;Bearer {YOUR_AUTH_KEY}&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Content-Type&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Content-Type&amp;quot;                data-endpoint=&amp;quot;GETapi-user&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Accept&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Accept&amp;quot;                data-endpoint=&amp;quot;GETapi-user&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                        &amp;lt;/form&amp;gt;

                    &amp;lt;h2 id=&amp;quot;endpoints-GETapi-docs-v1&amp;quot;&amp;gt;Invoke the controller method.&amp;lt;/h2&amp;gt;

&amp;lt;p&amp;gt;
&amp;lt;small class=&amp;quot;badge badge-darkred&amp;quot;&amp;gt;requires authentication&amp;lt;/small&amp;gt;
&amp;lt;/p&amp;gt;



&amp;lt;span id=&amp;quot;example-requests-GETapi-docs-v1&amp;quot;&amp;gt;
&amp;lt;blockquote&amp;gt;Example request:&amp;lt;/blockquote&amp;gt;


&amp;lt;div class=&amp;quot;bash-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-bash&amp;quot;&amp;gt;curl --request GET \
    --get &amp;quot;http://tickets-api.test/api/docs/v1&amp;quot; \
    --header &amp;quot;Authorization: Bearer {YOUR_AUTH_KEY}&amp;quot; \
    --header &amp;quot;Content-Type: application/json&amp;quot; \
    --header &amp;quot;Accept: application/json&amp;quot;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;


&amp;lt;div class=&amp;quot;javascript-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-javascript&amp;quot;&amp;gt;const url = new URL(
    &amp;quot;http://tickets-api.test/api/docs/v1&amp;quot;
);

const headers = {
    &amp;quot;Authorization&amp;quot;: &amp;quot;Bearer {YOUR_AUTH_KEY}&amp;quot;,
    &amp;quot;Content-Type&amp;quot;: &amp;quot;application/json&amp;quot;,
    &amp;quot;Accept&amp;quot;: &amp;quot;application/json&amp;quot;,
};

fetch(url, {
    method: &amp;quot;GET&amp;quot;,
    headers,
}).then(response =&amp;amp;gt; response.json());&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;

&amp;lt;/span&amp;gt;

&amp;lt;span id=&amp;quot;example-responses-GETapi-docs-v1&amp;quot;&amp;gt;
            &amp;lt;blockquote&amp;gt;
            &amp;lt;p&amp;gt;Example response (200):&amp;lt;/p&amp;gt;
        &amp;lt;/blockquote&amp;gt;
                &amp;lt;details class=&amp;quot;annotation&amp;quot;&amp;gt;
            &amp;lt;summary style=&amp;quot;cursor: pointer;&amp;quot;&amp;gt;
                &amp;lt;small onclick=&amp;quot;textContent = parentElement.parentElement.open ? &amp;#039;Show headers&amp;#039; : &amp;#039;Hide headers&amp;#039;&amp;quot;&amp;gt;Show headers&amp;lt;/small&amp;gt;
            &amp;lt;/summary&amp;gt;
            &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-http&amp;quot;&amp;gt;cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 &amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/details&amp;gt;         &amp;lt;pre&amp;gt;

&amp;lt;code class=&amp;quot;language-json&amp;quot; style=&amp;quot;max-height: 300px;&amp;quot;&amp;gt;{
    &amp;amp;quot;error&amp;amp;quot;: {
        &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;InvalidArgumentException&amp;amp;quot;,
        &amp;amp;quot;status&amp;amp;quot;: 0,
        &amp;amp;quot;message&amp;amp;quot;: &amp;amp;quot;View [scribe.index] not found.&amp;amp;quot;
    }
}&amp;lt;/code&amp;gt;
 &amp;lt;/pre&amp;gt;
    &amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-results-GETapi-docs-v1&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Received response&amp;lt;span
                id=&amp;quot;execution-response-status-GETapi-docs-v1&amp;quot;&amp;gt;&amp;lt;/span&amp;gt;:
    &amp;lt;/blockquote&amp;gt;
    &amp;lt;pre class=&amp;quot;json&amp;quot;&amp;gt;&amp;lt;code id=&amp;quot;execution-response-content-GETapi-docs-v1&amp;quot;
      data-empty-response-text=&amp;quot;&amp;lt;Empty response&amp;gt;&amp;quot; style=&amp;quot;max-height: 400px;&amp;quot;&amp;gt;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-error-GETapi-docs-v1&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Request failed with error:&amp;lt;/blockquote&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code id=&amp;quot;execution-error-message-GETapi-docs-v1&amp;quot;&amp;gt;

Tip: Check that you&amp;amp;#039;re properly connected to the network.
If you&amp;amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;form id=&amp;quot;form-GETapi-docs-v1&amp;quot; data-method=&amp;quot;GET&amp;quot;
      data-path=&amp;quot;api/docs/v1&amp;quot;
      data-authed=&amp;quot;1&amp;quot;
      data-hasfiles=&amp;quot;0&amp;quot;
      data-isarraybody=&amp;quot;0&amp;quot;
      autocomplete=&amp;quot;off&amp;quot;
      onsubmit=&amp;quot;event.preventDefault(); executeTryOut(&amp;#039;GETapi-docs-v1&amp;#039;, this);&amp;quot;&amp;gt;
    &amp;lt;h3&amp;gt;
        Request&amp;amp;nbsp;&amp;amp;nbsp;&amp;amp;nbsp;
                    &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-tryout-GETapi-docs-v1&amp;quot;
                    onclick=&amp;quot;tryItOut(&amp;#039;GETapi-docs-v1&amp;#039;);&amp;quot;&amp;gt;Try it out ⚡
            &amp;lt;/button&amp;gt;
            &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-canceltryout-GETapi-docs-v1&amp;quot;
                    onclick=&amp;quot;cancelTryOut(&amp;#039;GETapi-docs-v1&amp;#039;);&amp;quot; hidden&amp;gt;Cancel 🛑
            &amp;lt;/button&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
            &amp;lt;button type=&amp;quot;submit&amp;quot;
                    style=&amp;quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-executetryout-GETapi-docs-v1&amp;quot;
                    data-initial-text=&amp;quot;Send Request 💥&amp;quot;
                    data-loading-text=&amp;quot;⏱ Sending...&amp;quot;
                    hidden&amp;gt;Send Request 💥
            &amp;lt;/button&amp;gt;
            &amp;lt;/h3&amp;gt;
            &amp;lt;p&amp;gt;
            &amp;lt;small class=&amp;quot;badge badge-green&amp;quot;&amp;gt;GET&amp;lt;/small&amp;gt;
            &amp;lt;b&amp;gt;&amp;lt;code&amp;gt;api/docs/v1&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;
        &amp;lt;/p&amp;gt;
                &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;Headers&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Authorization&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Authorization&amp;quot; class=&amp;quot;auth-value&amp;quot;               data-endpoint=&amp;quot;GETapi-docs-v1&amp;quot;
               value=&amp;quot;Bearer {YOUR_AUTH_KEY}&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;Bearer {YOUR_AUTH_KEY}&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Content-Type&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Content-Type&amp;quot;                data-endpoint=&amp;quot;GETapi-docs-v1&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Accept&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Accept&amp;quot;                data-endpoint=&amp;quot;GETapi-docs-v1&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                        &amp;lt;/form&amp;gt;

                    &amp;lt;h2 id=&amp;quot;endpoints-GETapi-v1-tickets--id-&amp;quot;&amp;gt;Display the specified resource.&amp;lt;/h2&amp;gt;

&amp;lt;p&amp;gt;
&amp;lt;small class=&amp;quot;badge badge-darkred&amp;quot;&amp;gt;requires authentication&amp;lt;/small&amp;gt;
&amp;lt;/p&amp;gt;



&amp;lt;span id=&amp;quot;example-requests-GETapi-v1-tickets--id-&amp;quot;&amp;gt;
&amp;lt;blockquote&amp;gt;Example request:&amp;lt;/blockquote&amp;gt;


&amp;lt;div class=&amp;quot;bash-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-bash&amp;quot;&amp;gt;curl --request GET \
    --get &amp;quot;http://tickets-api.test/api/v1/tickets/1&amp;quot; \
    --header &amp;quot;Authorization: Bearer {YOUR_AUTH_KEY}&amp;quot; \
    --header &amp;quot;Content-Type: application/json&amp;quot; \
    --header &amp;quot;Accept: application/json&amp;quot;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;


&amp;lt;div class=&amp;quot;javascript-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-javascript&amp;quot;&amp;gt;const url = new URL(
    &amp;quot;http://tickets-api.test/api/v1/tickets/1&amp;quot;
);

const headers = {
    &amp;quot;Authorization&amp;quot;: &amp;quot;Bearer {YOUR_AUTH_KEY}&amp;quot;,
    &amp;quot;Content-Type&amp;quot;: &amp;quot;application/json&amp;quot;,
    &amp;quot;Accept&amp;quot;: &amp;quot;application/json&amp;quot;,
};

fetch(url, {
    method: &amp;quot;GET&amp;quot;,
    headers,
}).then(response =&amp;amp;gt; response.json());&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;

&amp;lt;/span&amp;gt;

&amp;lt;span id=&amp;quot;example-responses-GETapi-v1-tickets--id-&amp;quot;&amp;gt;
            &amp;lt;blockquote&amp;gt;
            &amp;lt;p&amp;gt;Example response (200):&amp;lt;/p&amp;gt;
        &amp;lt;/blockquote&amp;gt;
                &amp;lt;details class=&amp;quot;annotation&amp;quot;&amp;gt;
            &amp;lt;summary style=&amp;quot;cursor: pointer;&amp;quot;&amp;gt;
                &amp;lt;small onclick=&amp;quot;textContent = parentElement.parentElement.open ? &amp;#039;Show headers&amp;#039; : &amp;#039;Hide headers&amp;#039;&amp;quot;&amp;gt;Show headers&amp;lt;/small&amp;gt;
            &amp;lt;/summary&amp;gt;
            &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-http&amp;quot;&amp;gt;cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 &amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/details&amp;gt;         &amp;lt;pre&amp;gt;

&amp;lt;code class=&amp;quot;language-json&amp;quot; style=&amp;quot;max-height: 300px;&amp;quot;&amp;gt;{
    &amp;amp;quot;data&amp;amp;quot;: {
        &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;ticket&amp;amp;quot;,
        &amp;amp;quot;id&amp;amp;quot;: 1,
        &amp;amp;quot;attributes&amp;amp;quot;: {
            &amp;amp;quot;title&amp;amp;quot;: &amp;amp;quot;dolor qui optio&amp;amp;quot;,
            &amp;amp;quot;description&amp;amp;quot;: &amp;amp;quot;Praesentium facere qui voluptatibus est. Saepe impedit ratione amet ut. Voluptas perferendis id earum fugit deleniti voluptatem. Debitis delectus molestias dolorem iusto dolores repellat consequuntur corrupti. Sit et accusantium omnis praesentium sit ratione.&amp;amp;quot;,
            &amp;amp;quot;status&amp;amp;quot;: &amp;amp;quot;X&amp;amp;quot;,
            &amp;amp;quot;created_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;,
            &amp;amp;quot;updated_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:40:44.000000Z&amp;amp;quot;
        },
        &amp;amp;quot;relationships&amp;amp;quot;: {
            &amp;amp;quot;author&amp;amp;quot;: {
                &amp;amp;quot;data&amp;amp;quot;: {
                    &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;user&amp;amp;quot;,
                    &amp;amp;quot;id&amp;amp;quot;: 10
                },
                &amp;amp;quot;links&amp;amp;quot;: {
                    &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors/10&amp;amp;quot;
                }
            }
        },
        &amp;amp;quot;links&amp;amp;quot;: {
            &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/tickets/1&amp;amp;quot;
        }
    }
}&amp;lt;/code&amp;gt;
 &amp;lt;/pre&amp;gt;
    &amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-results-GETapi-v1-tickets--id-&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Received response&amp;lt;span
                id=&amp;quot;execution-response-status-GETapi-v1-tickets--id-&amp;quot;&amp;gt;&amp;lt;/span&amp;gt;:
    &amp;lt;/blockquote&amp;gt;
    &amp;lt;pre class=&amp;quot;json&amp;quot;&amp;gt;&amp;lt;code id=&amp;quot;execution-response-content-GETapi-v1-tickets--id-&amp;quot;
      data-empty-response-text=&amp;quot;&amp;lt;Empty response&amp;gt;&amp;quot; style=&amp;quot;max-height: 400px;&amp;quot;&amp;gt;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-error-GETapi-v1-tickets--id-&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Request failed with error:&amp;lt;/blockquote&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code id=&amp;quot;execution-error-message-GETapi-v1-tickets--id-&amp;quot;&amp;gt;

Tip: Check that you&amp;amp;#039;re properly connected to the network.
If you&amp;amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;form id=&amp;quot;form-GETapi-v1-tickets--id-&amp;quot; data-method=&amp;quot;GET&amp;quot;
      data-path=&amp;quot;api/v1/tickets/{id}&amp;quot;
      data-authed=&amp;quot;1&amp;quot;
      data-hasfiles=&amp;quot;0&amp;quot;
      data-isarraybody=&amp;quot;0&amp;quot;
      autocomplete=&amp;quot;off&amp;quot;
      onsubmit=&amp;quot;event.preventDefault(); executeTryOut(&amp;#039;GETapi-v1-tickets--id-&amp;#039;, this);&amp;quot;&amp;gt;
    &amp;lt;h3&amp;gt;
        Request&amp;amp;nbsp;&amp;amp;nbsp;&amp;amp;nbsp;
                    &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-tryout-GETapi-v1-tickets--id-&amp;quot;
                    onclick=&amp;quot;tryItOut(&amp;#039;GETapi-v1-tickets--id-&amp;#039;);&amp;quot;&amp;gt;Try it out ⚡
            &amp;lt;/button&amp;gt;
            &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-canceltryout-GETapi-v1-tickets--id-&amp;quot;
                    onclick=&amp;quot;cancelTryOut(&amp;#039;GETapi-v1-tickets--id-&amp;#039;);&amp;quot; hidden&amp;gt;Cancel 🛑
            &amp;lt;/button&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
            &amp;lt;button type=&amp;quot;submit&amp;quot;
                    style=&amp;quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-executetryout-GETapi-v1-tickets--id-&amp;quot;
                    data-initial-text=&amp;quot;Send Request 💥&amp;quot;
                    data-loading-text=&amp;quot;⏱ Sending...&amp;quot;
                    hidden&amp;gt;Send Request 💥
            &amp;lt;/button&amp;gt;
            &amp;lt;/h3&amp;gt;
            &amp;lt;p&amp;gt;
            &amp;lt;small class=&amp;quot;badge badge-green&amp;quot;&amp;gt;GET&amp;lt;/small&amp;gt;
            &amp;lt;b&amp;gt;&amp;lt;code&amp;gt;api/v1/tickets/{id}&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;
        &amp;lt;/p&amp;gt;
                &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;Headers&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Authorization&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Authorization&amp;quot; class=&amp;quot;auth-value&amp;quot;               data-endpoint=&amp;quot;GETapi-v1-tickets--id-&amp;quot;
               value=&amp;quot;Bearer {YOUR_AUTH_KEY}&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;Bearer {YOUR_AUTH_KEY}&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Content-Type&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Content-Type&amp;quot;                data-endpoint=&amp;quot;GETapi-v1-tickets--id-&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Accept&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Accept&amp;quot;                data-endpoint=&amp;quot;GETapi-v1-tickets--id-&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                        &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;URL Parameters&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                    &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;id&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;integer&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;number&amp;quot; style=&amp;quot;display: none&amp;quot;
               step=&amp;quot;any&amp;quot;               name=&amp;quot;id&amp;quot;                data-endpoint=&amp;quot;GETapi-v1-tickets--id-&amp;quot;
               value=&amp;quot;1&amp;quot;
               data-component=&amp;quot;url&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;The ID of the ticket. Example: &amp;lt;code&amp;gt;1&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                    &amp;lt;/form&amp;gt;

                    &amp;lt;h2 id=&amp;quot;endpoints-DELETEapi-v1-tickets--id-&amp;quot;&amp;gt;Remove the specified resource from storage.&amp;lt;/h2&amp;gt;

&amp;lt;p&amp;gt;
&amp;lt;small class=&amp;quot;badge badge-darkred&amp;quot;&amp;gt;requires authentication&amp;lt;/small&amp;gt;
&amp;lt;/p&amp;gt;



&amp;lt;span id=&amp;quot;example-requests-DELETEapi-v1-tickets--id-&amp;quot;&amp;gt;
&amp;lt;blockquote&amp;gt;Example request:&amp;lt;/blockquote&amp;gt;


&amp;lt;div class=&amp;quot;bash-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-bash&amp;quot;&amp;gt;curl --request DELETE \
    &amp;quot;http://tickets-api.test/api/v1/tickets/1&amp;quot; \
    --header &amp;quot;Authorization: Bearer {YOUR_AUTH_KEY}&amp;quot; \
    --header &amp;quot;Content-Type: application/json&amp;quot; \
    --header &amp;quot;Accept: application/json&amp;quot;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;


&amp;lt;div class=&amp;quot;javascript-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-javascript&amp;quot;&amp;gt;const url = new URL(
    &amp;quot;http://tickets-api.test/api/v1/tickets/1&amp;quot;
);

const headers = {
    &amp;quot;Authorization&amp;quot;: &amp;quot;Bearer {YOUR_AUTH_KEY}&amp;quot;,
    &amp;quot;Content-Type&amp;quot;: &amp;quot;application/json&amp;quot;,
    &amp;quot;Accept&amp;quot;: &amp;quot;application/json&amp;quot;,
};

fetch(url, {
    method: &amp;quot;DELETE&amp;quot;,
    headers,
}).then(response =&amp;amp;gt; response.json());&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;

&amp;lt;/span&amp;gt;

&amp;lt;span id=&amp;quot;example-responses-DELETEapi-v1-tickets--id-&amp;quot;&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-results-DELETEapi-v1-tickets--id-&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Received response&amp;lt;span
                id=&amp;quot;execution-response-status-DELETEapi-v1-tickets--id-&amp;quot;&amp;gt;&amp;lt;/span&amp;gt;:
    &amp;lt;/blockquote&amp;gt;
    &amp;lt;pre class=&amp;quot;json&amp;quot;&amp;gt;&amp;lt;code id=&amp;quot;execution-response-content-DELETEapi-v1-tickets--id-&amp;quot;
      data-empty-response-text=&amp;quot;&amp;lt;Empty response&amp;gt;&amp;quot; style=&amp;quot;max-height: 400px;&amp;quot;&amp;gt;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-error-DELETEapi-v1-tickets--id-&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Request failed with error:&amp;lt;/blockquote&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code id=&amp;quot;execution-error-message-DELETEapi-v1-tickets--id-&amp;quot;&amp;gt;

Tip: Check that you&amp;amp;#039;re properly connected to the network.
If you&amp;amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;form id=&amp;quot;form-DELETEapi-v1-tickets--id-&amp;quot; data-method=&amp;quot;DELETE&amp;quot;
      data-path=&amp;quot;api/v1/tickets/{id}&amp;quot;
      data-authed=&amp;quot;1&amp;quot;
      data-hasfiles=&amp;quot;0&amp;quot;
      data-isarraybody=&amp;quot;0&amp;quot;
      autocomplete=&amp;quot;off&amp;quot;
      onsubmit=&amp;quot;event.preventDefault(); executeTryOut(&amp;#039;DELETEapi-v1-tickets--id-&amp;#039;, this);&amp;quot;&amp;gt;
    &amp;lt;h3&amp;gt;
        Request&amp;amp;nbsp;&amp;amp;nbsp;&amp;amp;nbsp;
                    &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-tryout-DELETEapi-v1-tickets--id-&amp;quot;
                    onclick=&amp;quot;tryItOut(&amp;#039;DELETEapi-v1-tickets--id-&amp;#039;);&amp;quot;&amp;gt;Try it out ⚡
            &amp;lt;/button&amp;gt;
            &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-canceltryout-DELETEapi-v1-tickets--id-&amp;quot;
                    onclick=&amp;quot;cancelTryOut(&amp;#039;DELETEapi-v1-tickets--id-&amp;#039;);&amp;quot; hidden&amp;gt;Cancel 🛑
            &amp;lt;/button&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
            &amp;lt;button type=&amp;quot;submit&amp;quot;
                    style=&amp;quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-executetryout-DELETEapi-v1-tickets--id-&amp;quot;
                    data-initial-text=&amp;quot;Send Request 💥&amp;quot;
                    data-loading-text=&amp;quot;⏱ Sending...&amp;quot;
                    hidden&amp;gt;Send Request 💥
            &amp;lt;/button&amp;gt;
            &amp;lt;/h3&amp;gt;
            &amp;lt;p&amp;gt;
            &amp;lt;small class=&amp;quot;badge badge-red&amp;quot;&amp;gt;DELETE&amp;lt;/small&amp;gt;
            &amp;lt;b&amp;gt;&amp;lt;code&amp;gt;api/v1/tickets/{id}&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;
        &amp;lt;/p&amp;gt;
                &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;Headers&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Authorization&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Authorization&amp;quot; class=&amp;quot;auth-value&amp;quot;               data-endpoint=&amp;quot;DELETEapi-v1-tickets--id-&amp;quot;
               value=&amp;quot;Bearer {YOUR_AUTH_KEY}&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;Bearer {YOUR_AUTH_KEY}&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Content-Type&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Content-Type&amp;quot;                data-endpoint=&amp;quot;DELETEapi-v1-tickets--id-&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Accept&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Accept&amp;quot;                data-endpoint=&amp;quot;DELETEapi-v1-tickets--id-&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                        &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;URL Parameters&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                    &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;id&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;integer&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;number&amp;quot; style=&amp;quot;display: none&amp;quot;
               step=&amp;quot;any&amp;quot;               name=&amp;quot;id&amp;quot;                data-endpoint=&amp;quot;DELETEapi-v1-tickets--id-&amp;quot;
               value=&amp;quot;1&amp;quot;
               data-component=&amp;quot;url&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;The ID of the ticket. Example: &amp;lt;code&amp;gt;1&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                    &amp;lt;/form&amp;gt;

                    &amp;lt;h2 id=&amp;quot;endpoints-PUTapi-v1-tickets--ticket_id-&amp;quot;&amp;gt;PUT api/v1/tickets/{ticket_id}&amp;lt;/h2&amp;gt;

&amp;lt;p&amp;gt;
&amp;lt;small class=&amp;quot;badge badge-darkred&amp;quot;&amp;gt;requires authentication&amp;lt;/small&amp;gt;
&amp;lt;/p&amp;gt;



&amp;lt;span id=&amp;quot;example-requests-PUTapi-v1-tickets--ticket_id-&amp;quot;&amp;gt;
&amp;lt;blockquote&amp;gt;Example request:&amp;lt;/blockquote&amp;gt;


&amp;lt;div class=&amp;quot;bash-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-bash&amp;quot;&amp;gt;curl --request PUT \
    &amp;quot;http://tickets-api.test/api/v1/tickets/1&amp;quot; \
    --header &amp;quot;Authorization: Bearer {YOUR_AUTH_KEY}&amp;quot; \
    --header &amp;quot;Content-Type: application/json&amp;quot; \
    --header &amp;quot;Accept: application/json&amp;quot; \
    --data &amp;quot;{
    \&amp;quot;data\&amp;quot;: {
        \&amp;quot;attributes\&amp;quot;: {
            \&amp;quot;title\&amp;quot;: \&amp;quot;qui\&amp;quot;,
            \&amp;quot;description\&amp;quot;: \&amp;quot;Optio facilis aut soluta sed ab sapiente.\&amp;quot;,
            \&amp;quot;status\&amp;quot;: \&amp;quot;C\&amp;quot;
        },
        \&amp;quot;relationships\&amp;quot;: {
            \&amp;quot;author\&amp;quot;: {
                \&amp;quot;data\&amp;quot;: {
                    \&amp;quot;id\&amp;quot;: 12
                }
            }
        }
    }
}&amp;quot;
&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;


&amp;lt;div class=&amp;quot;javascript-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-javascript&amp;quot;&amp;gt;const url = new URL(
    &amp;quot;http://tickets-api.test/api/v1/tickets/1&amp;quot;
);

const headers = {
    &amp;quot;Authorization&amp;quot;: &amp;quot;Bearer {YOUR_AUTH_KEY}&amp;quot;,
    &amp;quot;Content-Type&amp;quot;: &amp;quot;application/json&amp;quot;,
    &amp;quot;Accept&amp;quot;: &amp;quot;application/json&amp;quot;,
};

let body = {
    &amp;quot;data&amp;quot;: {
        &amp;quot;attributes&amp;quot;: {
            &amp;quot;title&amp;quot;: &amp;quot;qui&amp;quot;,
            &amp;quot;description&amp;quot;: &amp;quot;Optio facilis aut soluta sed ab sapiente.&amp;quot;,
            &amp;quot;status&amp;quot;: &amp;quot;C&amp;quot;
        },
        &amp;quot;relationships&amp;quot;: {
            &amp;quot;author&amp;quot;: {
                &amp;quot;data&amp;quot;: {
                    &amp;quot;id&amp;quot;: 12
                }
            }
        }
    }
};

fetch(url, {
    method: &amp;quot;PUT&amp;quot;,
    headers,
    body: JSON.stringify(body),
}).then(response =&amp;amp;gt; response.json());&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;

&amp;lt;/span&amp;gt;

&amp;lt;span id=&amp;quot;example-responses-PUTapi-v1-tickets--ticket_id-&amp;quot;&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-results-PUTapi-v1-tickets--ticket_id-&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Received response&amp;lt;span
                id=&amp;quot;execution-response-status-PUTapi-v1-tickets--ticket_id-&amp;quot;&amp;gt;&amp;lt;/span&amp;gt;:
    &amp;lt;/blockquote&amp;gt;
    &amp;lt;pre class=&amp;quot;json&amp;quot;&amp;gt;&amp;lt;code id=&amp;quot;execution-response-content-PUTapi-v1-tickets--ticket_id-&amp;quot;
      data-empty-response-text=&amp;quot;&amp;lt;Empty response&amp;gt;&amp;quot; style=&amp;quot;max-height: 400px;&amp;quot;&amp;gt;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-error-PUTapi-v1-tickets--ticket_id-&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Request failed with error:&amp;lt;/blockquote&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code id=&amp;quot;execution-error-message-PUTapi-v1-tickets--ticket_id-&amp;quot;&amp;gt;

Tip: Check that you&amp;amp;#039;re properly connected to the network.
If you&amp;amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;form id=&amp;quot;form-PUTapi-v1-tickets--ticket_id-&amp;quot; data-method=&amp;quot;PUT&amp;quot;
      data-path=&amp;quot;api/v1/tickets/{ticket_id}&amp;quot;
      data-authed=&amp;quot;1&amp;quot;
      data-hasfiles=&amp;quot;0&amp;quot;
      data-isarraybody=&amp;quot;0&amp;quot;
      autocomplete=&amp;quot;off&amp;quot;
      onsubmit=&amp;quot;event.preventDefault(); executeTryOut(&amp;#039;PUTapi-v1-tickets--ticket_id-&amp;#039;, this);&amp;quot;&amp;gt;
    &amp;lt;h3&amp;gt;
        Request&amp;amp;nbsp;&amp;amp;nbsp;&amp;amp;nbsp;
                    &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-tryout-PUTapi-v1-tickets--ticket_id-&amp;quot;
                    onclick=&amp;quot;tryItOut(&amp;#039;PUTapi-v1-tickets--ticket_id-&amp;#039;);&amp;quot;&amp;gt;Try it out ⚡
            &amp;lt;/button&amp;gt;
            &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-canceltryout-PUTapi-v1-tickets--ticket_id-&amp;quot;
                    onclick=&amp;quot;cancelTryOut(&amp;#039;PUTapi-v1-tickets--ticket_id-&amp;#039;);&amp;quot; hidden&amp;gt;Cancel 🛑
            &amp;lt;/button&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
            &amp;lt;button type=&amp;quot;submit&amp;quot;
                    style=&amp;quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-executetryout-PUTapi-v1-tickets--ticket_id-&amp;quot;
                    data-initial-text=&amp;quot;Send Request 💥&amp;quot;
                    data-loading-text=&amp;quot;⏱ Sending...&amp;quot;
                    hidden&amp;gt;Send Request 💥
            &amp;lt;/button&amp;gt;
            &amp;lt;/h3&amp;gt;
            &amp;lt;p&amp;gt;
            &amp;lt;small class=&amp;quot;badge badge-darkblue&amp;quot;&amp;gt;PUT&amp;lt;/small&amp;gt;
            &amp;lt;b&amp;gt;&amp;lt;code&amp;gt;api/v1/tickets/{ticket_id}&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;
        &amp;lt;/p&amp;gt;
                &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;Headers&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Authorization&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Authorization&amp;quot; class=&amp;quot;auth-value&amp;quot;               data-endpoint=&amp;quot;PUTapi-v1-tickets--ticket_id-&amp;quot;
               value=&amp;quot;Bearer {YOUR_AUTH_KEY}&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;Bearer {YOUR_AUTH_KEY}&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Content-Type&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Content-Type&amp;quot;                data-endpoint=&amp;quot;PUTapi-v1-tickets--ticket_id-&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Accept&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Accept&amp;quot;                data-endpoint=&amp;quot;PUTapi-v1-tickets--ticket_id-&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                        &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;URL Parameters&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                    &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;ticket_id&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;integer&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;number&amp;quot; style=&amp;quot;display: none&amp;quot;
               step=&amp;quot;any&amp;quot;               name=&amp;quot;ticket_id&amp;quot;                data-endpoint=&amp;quot;PUTapi-v1-tickets--ticket_id-&amp;quot;
               value=&amp;quot;1&amp;quot;
               data-component=&amp;quot;url&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;The ID of the ticket. Example: &amp;lt;code&amp;gt;1&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                            &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;Body Parameters&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
        &amp;lt;div style=&amp;quot; padding-left: 28px;  clear: unset;&amp;quot;&amp;gt;
        &amp;lt;details&amp;gt;
            &amp;lt;summary style=&amp;quot;padding-bottom: 10px;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;data&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;object&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
&amp;lt;br&amp;gt;

            &amp;lt;/summary&amp;gt;
                                                &amp;lt;div style=&amp;quot; margin-left: 14px; clear: unset;&amp;quot;&amp;gt;
        &amp;lt;details&amp;gt;
            &amp;lt;summary style=&amp;quot;padding-bottom: 10px;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;attributes&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;object&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
&amp;lt;br&amp;gt;

            &amp;lt;/summary&amp;gt;
                                                &amp;lt;div style=&amp;quot;margin-left: 28px; clear: unset;&amp;quot;&amp;gt;
                        &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;title&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;string&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;data.attributes.title&amp;quot;                data-endpoint=&amp;quot;PUTapi-v1-tickets--ticket_id-&amp;quot;
               value=&amp;quot;qui&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;qui&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
                    &amp;lt;/div&amp;gt;
                                                                &amp;lt;div style=&amp;quot;margin-left: 28px; clear: unset;&amp;quot;&amp;gt;
                        &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;description&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;string&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;data.attributes.description&amp;quot;                data-endpoint=&amp;quot;PUTapi-v1-tickets--ticket_id-&amp;quot;
               value=&amp;quot;Optio facilis aut soluta sed ab sapiente.&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;Optio facilis aut soluta sed ab sapiente.&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
                    &amp;lt;/div&amp;gt;
                                                                &amp;lt;div style=&amp;quot;margin-left: 28px; clear: unset;&amp;quot;&amp;gt;
                        &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;status&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;string&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;data.attributes.status&amp;quot;                data-endpoint=&amp;quot;PUTapi-v1-tickets--ticket_id-&amp;quot;
               value=&amp;quot;C&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;C&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
Must be one of:
&amp;lt;ul style=&amp;quot;list-style-type: square;&amp;quot;&amp;gt;&amp;lt;li&amp;gt;&amp;lt;code&amp;gt;A&amp;lt;/code&amp;gt;&amp;lt;/li&amp;gt; &amp;lt;li&amp;gt;&amp;lt;code&amp;gt;C&amp;lt;/code&amp;gt;&amp;lt;/li&amp;gt; &amp;lt;li&amp;gt;&amp;lt;code&amp;gt;H&amp;lt;/code&amp;gt;&amp;lt;/li&amp;gt; &amp;lt;li&amp;gt;&amp;lt;code&amp;gt;X&amp;lt;/code&amp;gt;&amp;lt;/li&amp;gt;&amp;lt;/ul&amp;gt;
                    &amp;lt;/div&amp;gt;
                                    &amp;lt;/details&amp;gt;
        &amp;lt;/div&amp;gt;
                                                                    &amp;lt;div style=&amp;quot; margin-left: 14px; clear: unset;&amp;quot;&amp;gt;
        &amp;lt;details&amp;gt;
            &amp;lt;summary style=&amp;quot;padding-bottom: 10px;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;relationships&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;object&amp;lt;/small&amp;gt;&amp;amp;nbsp;
&amp;lt;i&amp;gt;optional&amp;lt;/i&amp;gt; &amp;amp;nbsp;
&amp;lt;br&amp;gt;

            &amp;lt;/summary&amp;gt;
                                                &amp;lt;div style=&amp;quot; margin-left: 28px; clear: unset;&amp;quot;&amp;gt;
        &amp;lt;details&amp;gt;
            &amp;lt;summary style=&amp;quot;padding-bottom: 10px;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;author&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;object&amp;lt;/small&amp;gt;&amp;amp;nbsp;
&amp;lt;i&amp;gt;optional&amp;lt;/i&amp;gt; &amp;amp;nbsp;
&amp;lt;br&amp;gt;

            &amp;lt;/summary&amp;gt;
                                                &amp;lt;div style=&amp;quot; margin-left: 42px; clear: unset;&amp;quot;&amp;gt;
        &amp;lt;details&amp;gt;
            &amp;lt;summary style=&amp;quot;padding-bottom: 10px;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;data&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;object&amp;lt;/small&amp;gt;&amp;amp;nbsp;
&amp;lt;i&amp;gt;optional&amp;lt;/i&amp;gt; &amp;amp;nbsp;
&amp;lt;br&amp;gt;

            &amp;lt;/summary&amp;gt;
                                                &amp;lt;div style=&amp;quot;margin-left: 56px; clear: unset;&amp;quot;&amp;gt;
                        &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;id&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;integer&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;number&amp;quot; style=&amp;quot;display: none&amp;quot;
               step=&amp;quot;any&amp;quot;               name=&amp;quot;data.relationships.author.data.id&amp;quot;                data-endpoint=&amp;quot;PUTapi-v1-tickets--ticket_id-&amp;quot;
               value=&amp;quot;12&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;12&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
                    &amp;lt;/div&amp;gt;
                                    &amp;lt;/details&amp;gt;
        &amp;lt;/div&amp;gt;
                                        &amp;lt;/details&amp;gt;
        &amp;lt;/div&amp;gt;
                                        &amp;lt;/details&amp;gt;
        &amp;lt;/div&amp;gt;
                                        &amp;lt;/details&amp;gt;
        &amp;lt;/div&amp;gt;
        &amp;lt;/form&amp;gt;

                    &amp;lt;h2 id=&amp;quot;endpoints-PATCHapi-v1-tickets--ticket_id-&amp;quot;&amp;gt;Update the specified resource in storage.&amp;lt;/h2&amp;gt;

&amp;lt;p&amp;gt;
&amp;lt;small class=&amp;quot;badge badge-darkred&amp;quot;&amp;gt;requires authentication&amp;lt;/small&amp;gt;
&amp;lt;/p&amp;gt;



&amp;lt;span id=&amp;quot;example-requests-PATCHapi-v1-tickets--ticket_id-&amp;quot;&amp;gt;
&amp;lt;blockquote&amp;gt;Example request:&amp;lt;/blockquote&amp;gt;


&amp;lt;div class=&amp;quot;bash-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-bash&amp;quot;&amp;gt;curl --request PATCH \
    &amp;quot;http://tickets-api.test/api/v1/tickets/1&amp;quot; \
    --header &amp;quot;Authorization: Bearer {YOUR_AUTH_KEY}&amp;quot; \
    --header &amp;quot;Content-Type: application/json&amp;quot; \
    --header &amp;quot;Accept: application/json&amp;quot; \
    --data &amp;quot;{
    \&amp;quot;data\&amp;quot;: {
        \&amp;quot;attributes\&amp;quot;: {
            \&amp;quot;title\&amp;quot;: \&amp;quot;est\&amp;quot;,
            \&amp;quot;description\&amp;quot;: \&amp;quot;Quaerat provident quasi aperiam et sapiente rerum vel sint.\&amp;quot;,
            \&amp;quot;status\&amp;quot;: \&amp;quot;A\&amp;quot;
        },
        \&amp;quot;relationships\&amp;quot;: {
            \&amp;quot;author\&amp;quot;: {
                \&amp;quot;data\&amp;quot;: []
            }
        }
    }
}&amp;quot;
&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;


&amp;lt;div class=&amp;quot;javascript-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-javascript&amp;quot;&amp;gt;const url = new URL(
    &amp;quot;http://tickets-api.test/api/v1/tickets/1&amp;quot;
);

const headers = {
    &amp;quot;Authorization&amp;quot;: &amp;quot;Bearer {YOUR_AUTH_KEY}&amp;quot;,
    &amp;quot;Content-Type&amp;quot;: &amp;quot;application/json&amp;quot;,
    &amp;quot;Accept&amp;quot;: &amp;quot;application/json&amp;quot;,
};

let body = {
    &amp;quot;data&amp;quot;: {
        &amp;quot;attributes&amp;quot;: {
            &amp;quot;title&amp;quot;: &amp;quot;est&amp;quot;,
            &amp;quot;description&amp;quot;: &amp;quot;Quaerat provident quasi aperiam et sapiente rerum vel sint.&amp;quot;,
            &amp;quot;status&amp;quot;: &amp;quot;A&amp;quot;
        },
        &amp;quot;relationships&amp;quot;: {
            &amp;quot;author&amp;quot;: {
                &amp;quot;data&amp;quot;: []
            }
        }
    }
};

fetch(url, {
    method: &amp;quot;PATCH&amp;quot;,
    headers,
    body: JSON.stringify(body),
}).then(response =&amp;amp;gt; response.json());&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;

&amp;lt;/span&amp;gt;

&amp;lt;span id=&amp;quot;example-responses-PATCHapi-v1-tickets--ticket_id-&amp;quot;&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-results-PATCHapi-v1-tickets--ticket_id-&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Received response&amp;lt;span
                id=&amp;quot;execution-response-status-PATCHapi-v1-tickets--ticket_id-&amp;quot;&amp;gt;&amp;lt;/span&amp;gt;:
    &amp;lt;/blockquote&amp;gt;
    &amp;lt;pre class=&amp;quot;json&amp;quot;&amp;gt;&amp;lt;code id=&amp;quot;execution-response-content-PATCHapi-v1-tickets--ticket_id-&amp;quot;
      data-empty-response-text=&amp;quot;&amp;lt;Empty response&amp;gt;&amp;quot; style=&amp;quot;max-height: 400px;&amp;quot;&amp;gt;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-error-PATCHapi-v1-tickets--ticket_id-&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Request failed with error:&amp;lt;/blockquote&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code id=&amp;quot;execution-error-message-PATCHapi-v1-tickets--ticket_id-&amp;quot;&amp;gt;

Tip: Check that you&amp;amp;#039;re properly connected to the network.
If you&amp;amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;form id=&amp;quot;form-PATCHapi-v1-tickets--ticket_id-&amp;quot; data-method=&amp;quot;PATCH&amp;quot;
      data-path=&amp;quot;api/v1/tickets/{ticket_id}&amp;quot;
      data-authed=&amp;quot;1&amp;quot;
      data-hasfiles=&amp;quot;0&amp;quot;
      data-isarraybody=&amp;quot;0&amp;quot;
      autocomplete=&amp;quot;off&amp;quot;
      onsubmit=&amp;quot;event.preventDefault(); executeTryOut(&amp;#039;PATCHapi-v1-tickets--ticket_id-&amp;#039;, this);&amp;quot;&amp;gt;
    &amp;lt;h3&amp;gt;
        Request&amp;amp;nbsp;&amp;amp;nbsp;&amp;amp;nbsp;
                    &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-tryout-PATCHapi-v1-tickets--ticket_id-&amp;quot;
                    onclick=&amp;quot;tryItOut(&amp;#039;PATCHapi-v1-tickets--ticket_id-&amp;#039;);&amp;quot;&amp;gt;Try it out ⚡
            &amp;lt;/button&amp;gt;
            &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-canceltryout-PATCHapi-v1-tickets--ticket_id-&amp;quot;
                    onclick=&amp;quot;cancelTryOut(&amp;#039;PATCHapi-v1-tickets--ticket_id-&amp;#039;);&amp;quot; hidden&amp;gt;Cancel 🛑
            &amp;lt;/button&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
            &amp;lt;button type=&amp;quot;submit&amp;quot;
                    style=&amp;quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-executetryout-PATCHapi-v1-tickets--ticket_id-&amp;quot;
                    data-initial-text=&amp;quot;Send Request 💥&amp;quot;
                    data-loading-text=&amp;quot;⏱ Sending...&amp;quot;
                    hidden&amp;gt;Send Request 💥
            &amp;lt;/button&amp;gt;
            &amp;lt;/h3&amp;gt;
            &amp;lt;p&amp;gt;
            &amp;lt;small class=&amp;quot;badge badge-purple&amp;quot;&amp;gt;PATCH&amp;lt;/small&amp;gt;
            &amp;lt;b&amp;gt;&amp;lt;code&amp;gt;api/v1/tickets/{ticket_id}&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;
        &amp;lt;/p&amp;gt;
                &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;Headers&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Authorization&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Authorization&amp;quot; class=&amp;quot;auth-value&amp;quot;               data-endpoint=&amp;quot;PATCHapi-v1-tickets--ticket_id-&amp;quot;
               value=&amp;quot;Bearer {YOUR_AUTH_KEY}&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;Bearer {YOUR_AUTH_KEY}&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Content-Type&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Content-Type&amp;quot;                data-endpoint=&amp;quot;PATCHapi-v1-tickets--ticket_id-&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Accept&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Accept&amp;quot;                data-endpoint=&amp;quot;PATCHapi-v1-tickets--ticket_id-&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                        &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;URL Parameters&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                    &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;ticket_id&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;integer&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;number&amp;quot; style=&amp;quot;display: none&amp;quot;
               step=&amp;quot;any&amp;quot;               name=&amp;quot;ticket_id&amp;quot;                data-endpoint=&amp;quot;PATCHapi-v1-tickets--ticket_id-&amp;quot;
               value=&amp;quot;1&amp;quot;
               data-component=&amp;quot;url&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;The ID of the ticket. Example: &amp;lt;code&amp;gt;1&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                            &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;Body Parameters&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
        &amp;lt;div style=&amp;quot; padding-left: 28px;  clear: unset;&amp;quot;&amp;gt;
        &amp;lt;details&amp;gt;
            &amp;lt;summary style=&amp;quot;padding-bottom: 10px;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;data&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;object&amp;lt;/small&amp;gt;&amp;amp;nbsp;
&amp;lt;i&amp;gt;optional&amp;lt;/i&amp;gt; &amp;amp;nbsp;
&amp;lt;br&amp;gt;

            &amp;lt;/summary&amp;gt;
                                                &amp;lt;div style=&amp;quot; margin-left: 14px; clear: unset;&amp;quot;&amp;gt;
        &amp;lt;details&amp;gt;
            &amp;lt;summary style=&amp;quot;padding-bottom: 10px;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;attributes&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;object&amp;lt;/small&amp;gt;&amp;amp;nbsp;
&amp;lt;i&amp;gt;optional&amp;lt;/i&amp;gt; &amp;amp;nbsp;
&amp;lt;br&amp;gt;

            &amp;lt;/summary&amp;gt;
                                                &amp;lt;div style=&amp;quot;margin-left: 28px; clear: unset;&amp;quot;&amp;gt;
                        &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;title&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;string&amp;lt;/small&amp;gt;&amp;amp;nbsp;
&amp;lt;i&amp;gt;optional&amp;lt;/i&amp;gt; &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;data.attributes.title&amp;quot;                data-endpoint=&amp;quot;PATCHapi-v1-tickets--ticket_id-&amp;quot;
               value=&amp;quot;est&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;est&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
                    &amp;lt;/div&amp;gt;
                                                                &amp;lt;div style=&amp;quot;margin-left: 28px; clear: unset;&amp;quot;&amp;gt;
                        &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;description&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;string&amp;lt;/small&amp;gt;&amp;amp;nbsp;
&amp;lt;i&amp;gt;optional&amp;lt;/i&amp;gt; &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;data.attributes.description&amp;quot;                data-endpoint=&amp;quot;PATCHapi-v1-tickets--ticket_id-&amp;quot;
               value=&amp;quot;Quaerat provident quasi aperiam et sapiente rerum vel sint.&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;Quaerat provident quasi aperiam et sapiente rerum vel sint.&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
                    &amp;lt;/div&amp;gt;
                                                                &amp;lt;div style=&amp;quot;margin-left: 28px; clear: unset;&amp;quot;&amp;gt;
                        &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;status&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;string&amp;lt;/small&amp;gt;&amp;amp;nbsp;
&amp;lt;i&amp;gt;optional&amp;lt;/i&amp;gt; &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;data.attributes.status&amp;quot;                data-endpoint=&amp;quot;PATCHapi-v1-tickets--ticket_id-&amp;quot;
               value=&amp;quot;A&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;A&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
Must be one of:
&amp;lt;ul style=&amp;quot;list-style-type: square;&amp;quot;&amp;gt;&amp;lt;li&amp;gt;&amp;lt;code&amp;gt;A&amp;lt;/code&amp;gt;&amp;lt;/li&amp;gt; &amp;lt;li&amp;gt;&amp;lt;code&amp;gt;C&amp;lt;/code&amp;gt;&amp;lt;/li&amp;gt; &amp;lt;li&amp;gt;&amp;lt;code&amp;gt;H&amp;lt;/code&amp;gt;&amp;lt;/li&amp;gt; &amp;lt;li&amp;gt;&amp;lt;code&amp;gt;X&amp;lt;/code&amp;gt;&amp;lt;/li&amp;gt;&amp;lt;/ul&amp;gt;
                    &amp;lt;/div&amp;gt;
                                    &amp;lt;/details&amp;gt;
        &amp;lt;/div&amp;gt;
                                                                    &amp;lt;div style=&amp;quot; margin-left: 14px; clear: unset;&amp;quot;&amp;gt;
        &amp;lt;details&amp;gt;
            &amp;lt;summary style=&amp;quot;padding-bottom: 10px;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;relationships&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;object&amp;lt;/small&amp;gt;&amp;amp;nbsp;
&amp;lt;i&amp;gt;optional&amp;lt;/i&amp;gt; &amp;amp;nbsp;
&amp;lt;br&amp;gt;

            &amp;lt;/summary&amp;gt;
                                                &amp;lt;div style=&amp;quot; margin-left: 28px; clear: unset;&amp;quot;&amp;gt;
        &amp;lt;details&amp;gt;
            &amp;lt;summary style=&amp;quot;padding-bottom: 10px;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;author&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;object&amp;lt;/small&amp;gt;&amp;amp;nbsp;
&amp;lt;i&amp;gt;optional&amp;lt;/i&amp;gt; &amp;amp;nbsp;
&amp;lt;br&amp;gt;

            &amp;lt;/summary&amp;gt;
                                                &amp;lt;div style=&amp;quot; margin-left: 42px; clear: unset;&amp;quot;&amp;gt;
        &amp;lt;details&amp;gt;
            &amp;lt;summary style=&amp;quot;padding-bottom: 10px;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;data&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;object&amp;lt;/small&amp;gt;&amp;amp;nbsp;
&amp;lt;i&amp;gt;optional&amp;lt;/i&amp;gt; &amp;amp;nbsp;
&amp;lt;br&amp;gt;

            &amp;lt;/summary&amp;gt;
                                                &amp;lt;div style=&amp;quot;margin-left: 56px; clear: unset;&amp;quot;&amp;gt;
                        &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;id&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;string&amp;lt;/small&amp;gt;&amp;amp;nbsp;
&amp;lt;i&amp;gt;optional&amp;lt;/i&amp;gt; &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;data.relationships.author.data.id&amp;quot;                data-endpoint=&amp;quot;PATCHapi-v1-tickets--ticket_id-&amp;quot;
               value=&amp;quot;&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;

                    &amp;lt;/div&amp;gt;
                                    &amp;lt;/details&amp;gt;
        &amp;lt;/div&amp;gt;
                                        &amp;lt;/details&amp;gt;
        &amp;lt;/div&amp;gt;
                                        &amp;lt;/details&amp;gt;
        &amp;lt;/div&amp;gt;
                                        &amp;lt;/details&amp;gt;
        &amp;lt;/div&amp;gt;
        &amp;lt;/form&amp;gt;

                    &amp;lt;h2 id=&amp;quot;endpoints-GETapi-v1-users&amp;quot;&amp;gt;Display a listing of the resource.&amp;lt;/h2&amp;gt;

&amp;lt;p&amp;gt;
&amp;lt;small class=&amp;quot;badge badge-darkred&amp;quot;&amp;gt;requires authentication&amp;lt;/small&amp;gt;
&amp;lt;/p&amp;gt;



&amp;lt;span id=&amp;quot;example-requests-GETapi-v1-users&amp;quot;&amp;gt;
&amp;lt;blockquote&amp;gt;Example request:&amp;lt;/blockquote&amp;gt;


&amp;lt;div class=&amp;quot;bash-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-bash&amp;quot;&amp;gt;curl --request GET \
    --get &amp;quot;http://tickets-api.test/api/v1/users&amp;quot; \
    --header &amp;quot;Authorization: Bearer {YOUR_AUTH_KEY}&amp;quot; \
    --header &amp;quot;Content-Type: application/json&amp;quot; \
    --header &amp;quot;Accept: application/json&amp;quot;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;


&amp;lt;div class=&amp;quot;javascript-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-javascript&amp;quot;&amp;gt;const url = new URL(
    &amp;quot;http://tickets-api.test/api/v1/users&amp;quot;
);

const headers = {
    &amp;quot;Authorization&amp;quot;: &amp;quot;Bearer {YOUR_AUTH_KEY}&amp;quot;,
    &amp;quot;Content-Type&amp;quot;: &amp;quot;application/json&amp;quot;,
    &amp;quot;Accept&amp;quot;: &amp;quot;application/json&amp;quot;,
};

fetch(url, {
    method: &amp;quot;GET&amp;quot;,
    headers,
}).then(response =&amp;amp;gt; response.json());&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;

&amp;lt;/span&amp;gt;

&amp;lt;span id=&amp;quot;example-responses-GETapi-v1-users&amp;quot;&amp;gt;
            &amp;lt;blockquote&amp;gt;
            &amp;lt;p&amp;gt;Example response (200):&amp;lt;/p&amp;gt;
        &amp;lt;/blockquote&amp;gt;
                &amp;lt;details class=&amp;quot;annotation&amp;quot;&amp;gt;
            &amp;lt;summary style=&amp;quot;cursor: pointer;&amp;quot;&amp;gt;
                &amp;lt;small onclick=&amp;quot;textContent = parentElement.parentElement.open ? &amp;#039;Show headers&amp;#039; : &amp;#039;Hide headers&amp;#039;&amp;quot;&amp;gt;Show headers&amp;lt;/small&amp;gt;
            &amp;lt;/summary&amp;gt;
            &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-http&amp;quot;&amp;gt;cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 &amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/details&amp;gt;         &amp;lt;pre&amp;gt;

&amp;lt;code class=&amp;quot;language-json&amp;quot; style=&amp;quot;max-height: 300px;&amp;quot;&amp;gt;{
    &amp;amp;quot;data&amp;amp;quot;: [
        {
            &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;user&amp;amp;quot;,
            &amp;amp;quot;id&amp;amp;quot;: 1,
            &amp;amp;quot;attributes&amp;amp;quot;: {
                &amp;amp;quot;name&amp;amp;quot;: &amp;amp;quot;Jayce Effertz&amp;amp;quot;,
                &amp;amp;quot;email&amp;amp;quot;: &amp;amp;quot;elijah.miller@example.com&amp;amp;quot;,
                &amp;amp;quot;isManager&amp;amp;quot;: false
            },
            &amp;amp;quot;links&amp;amp;quot;: {
                &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors/1&amp;amp;quot;
            }
        },
        {
            &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;user&amp;amp;quot;,
            &amp;amp;quot;id&amp;amp;quot;: 2,
            &amp;amp;quot;attributes&amp;amp;quot;: {
                &amp;amp;quot;name&amp;amp;quot;: &amp;amp;quot;Philip Schmeler&amp;amp;quot;,
                &amp;amp;quot;email&amp;amp;quot;: &amp;amp;quot;thiel.mireille@example.com&amp;amp;quot;,
                &amp;amp;quot;isManager&amp;amp;quot;: false
            },
            &amp;amp;quot;links&amp;amp;quot;: {
                &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors/2&amp;amp;quot;
            }
        },
        {
            &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;user&amp;amp;quot;,
            &amp;amp;quot;id&amp;amp;quot;: 3,
            &amp;amp;quot;attributes&amp;amp;quot;: {
                &amp;amp;quot;name&amp;amp;quot;: &amp;amp;quot;Mr. Malcolm Lubowitz&amp;amp;quot;,
                &amp;amp;quot;email&amp;amp;quot;: &amp;amp;quot;eichmann.arlene@example.com&amp;amp;quot;,
                &amp;amp;quot;isManager&amp;amp;quot;: false
            },
            &amp;amp;quot;links&amp;amp;quot;: {
                &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors/3&amp;amp;quot;
            }
        },
        {
            &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;user&amp;amp;quot;,
            &amp;amp;quot;id&amp;amp;quot;: 4,
            &amp;amp;quot;attributes&amp;amp;quot;: {
                &amp;amp;quot;name&amp;amp;quot;: &amp;amp;quot;Mr. Austin Heller Jr.&amp;amp;quot;,
                &amp;amp;quot;email&amp;amp;quot;: &amp;amp;quot;botsford.eileen@example.org&amp;amp;quot;,
                &amp;amp;quot;isManager&amp;amp;quot;: false
            },
            &amp;amp;quot;links&amp;amp;quot;: {
                &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors/4&amp;amp;quot;
            }
        },
        {
            &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;user&amp;amp;quot;,
            &amp;amp;quot;id&amp;amp;quot;: 5,
            &amp;amp;quot;attributes&amp;amp;quot;: {
                &amp;amp;quot;name&amp;amp;quot;: &amp;amp;quot;Dr. Kristina Spencer DDS&amp;amp;quot;,
                &amp;amp;quot;email&amp;amp;quot;: &amp;amp;quot;drunolfsdottir@example.org&amp;amp;quot;,
                &amp;amp;quot;isManager&amp;amp;quot;: false
            },
            &amp;amp;quot;links&amp;amp;quot;: {
                &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors/5&amp;amp;quot;
            }
        },
        {
            &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;user&amp;amp;quot;,
            &amp;amp;quot;id&amp;amp;quot;: 6,
            &amp;amp;quot;attributes&amp;amp;quot;: {
                &amp;amp;quot;name&amp;amp;quot;: &amp;amp;quot;Dr. Diamond Sporer&amp;amp;quot;,
                &amp;amp;quot;email&amp;amp;quot;: &amp;amp;quot;madyson.brakus@example.com&amp;amp;quot;,
                &amp;amp;quot;isManager&amp;amp;quot;: false
            },
            &amp;amp;quot;links&amp;amp;quot;: {
                &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors/6&amp;amp;quot;
            }
        },
        {
            &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;user&amp;amp;quot;,
            &amp;amp;quot;id&amp;amp;quot;: 7,
            &amp;amp;quot;attributes&amp;amp;quot;: {
                &amp;amp;quot;name&amp;amp;quot;: &amp;amp;quot;Kathlyn Smith&amp;amp;quot;,
                &amp;amp;quot;email&amp;amp;quot;: &amp;amp;quot;kschaden@example.com&amp;amp;quot;,
                &amp;amp;quot;isManager&amp;amp;quot;: false
            },
            &amp;amp;quot;links&amp;amp;quot;: {
                &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors/7&amp;amp;quot;
            }
        },
        {
            &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;user&amp;amp;quot;,
            &amp;amp;quot;id&amp;amp;quot;: 8,
            &amp;amp;quot;attributes&amp;amp;quot;: {
                &amp;amp;quot;name&amp;amp;quot;: &amp;amp;quot;Irving Rowe&amp;amp;quot;,
                &amp;amp;quot;email&amp;amp;quot;: &amp;amp;quot;aheidenreich@example.net&amp;amp;quot;,
                &amp;amp;quot;isManager&amp;amp;quot;: false
            },
            &amp;amp;quot;links&amp;amp;quot;: {
                &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors/8&amp;amp;quot;
            }
        },
        {
            &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;user&amp;amp;quot;,
            &amp;amp;quot;id&amp;amp;quot;: 9,
            &amp;amp;quot;attributes&amp;amp;quot;: {
                &amp;amp;quot;name&amp;amp;quot;: &amp;amp;quot;Creola Lubowitz&amp;amp;quot;,
                &amp;amp;quot;email&amp;amp;quot;: &amp;amp;quot;runolfsdottir.rosina@example.org&amp;amp;quot;,
                &amp;amp;quot;isManager&amp;amp;quot;: false
            },
            &amp;amp;quot;links&amp;amp;quot;: {
                &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors/9&amp;amp;quot;
            }
        },
        {
            &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;user&amp;amp;quot;,
            &amp;amp;quot;id&amp;amp;quot;: 10,
            &amp;amp;quot;attributes&amp;amp;quot;: {
                &amp;amp;quot;name&amp;amp;quot;: &amp;amp;quot;Alejandra Ebert&amp;amp;quot;,
                &amp;amp;quot;email&amp;amp;quot;: &amp;amp;quot;bwillms@example.com&amp;amp;quot;,
                &amp;amp;quot;isManager&amp;amp;quot;: false
            },
            &amp;amp;quot;links&amp;amp;quot;: {
                &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors/10&amp;amp;quot;
            }
        },
        {
            &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;user&amp;amp;quot;,
            &amp;amp;quot;id&amp;amp;quot;: 13,
            &amp;amp;quot;attributes&amp;amp;quot;: {
                &amp;amp;quot;name&amp;amp;quot;: &amp;amp;quot;Manager&amp;amp;quot;,
                &amp;amp;quot;email&amp;amp;quot;: &amp;amp;quot;manager@manager.com&amp;amp;quot;,
                &amp;amp;quot;isManager&amp;amp;quot;: true
            },
            &amp;amp;quot;links&amp;amp;quot;: {
                &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors/13&amp;amp;quot;
            }
        }
    ],
    &amp;amp;quot;links&amp;amp;quot;: {
        &amp;amp;quot;first&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/users?page=1&amp;amp;quot;,
        &amp;amp;quot;last&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/users?page=1&amp;amp;quot;,
        &amp;amp;quot;prev&amp;amp;quot;: null,
        &amp;amp;quot;next&amp;amp;quot;: null
    },
    &amp;amp;quot;meta&amp;amp;quot;: {
        &amp;amp;quot;current_page&amp;amp;quot;: 1,
        &amp;amp;quot;from&amp;amp;quot;: 1,
        &amp;amp;quot;last_page&amp;amp;quot;: 1,
        &amp;amp;quot;links&amp;amp;quot;: [
            {
                &amp;amp;quot;url&amp;amp;quot;: null,
                &amp;amp;quot;label&amp;amp;quot;: &amp;amp;quot;&amp;amp;amp;laquo; Previous&amp;amp;quot;,
                &amp;amp;quot;active&amp;amp;quot;: false
            },
            {
                &amp;amp;quot;url&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/users?page=1&amp;amp;quot;,
                &amp;amp;quot;label&amp;amp;quot;: &amp;amp;quot;1&amp;amp;quot;,
                &amp;amp;quot;active&amp;amp;quot;: true
            },
            {
                &amp;amp;quot;url&amp;amp;quot;: null,
                &amp;amp;quot;label&amp;amp;quot;: &amp;amp;quot;Next &amp;amp;amp;raquo;&amp;amp;quot;,
                &amp;amp;quot;active&amp;amp;quot;: false
            }
        ],
        &amp;amp;quot;path&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/users&amp;amp;quot;,
        &amp;amp;quot;per_page&amp;amp;quot;: 15,
        &amp;amp;quot;to&amp;amp;quot;: 11,
        &amp;amp;quot;total&amp;amp;quot;: 11
    }
}&amp;lt;/code&amp;gt;
 &amp;lt;/pre&amp;gt;
    &amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-results-GETapi-v1-users&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Received response&amp;lt;span
                id=&amp;quot;execution-response-status-GETapi-v1-users&amp;quot;&amp;gt;&amp;lt;/span&amp;gt;:
    &amp;lt;/blockquote&amp;gt;
    &amp;lt;pre class=&amp;quot;json&amp;quot;&amp;gt;&amp;lt;code id=&amp;quot;execution-response-content-GETapi-v1-users&amp;quot;
      data-empty-response-text=&amp;quot;&amp;lt;Empty response&amp;gt;&amp;quot; style=&amp;quot;max-height: 400px;&amp;quot;&amp;gt;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-error-GETapi-v1-users&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Request failed with error:&amp;lt;/blockquote&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code id=&amp;quot;execution-error-message-GETapi-v1-users&amp;quot;&amp;gt;

Tip: Check that you&amp;amp;#039;re properly connected to the network.
If you&amp;amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;form id=&amp;quot;form-GETapi-v1-users&amp;quot; data-method=&amp;quot;GET&amp;quot;
      data-path=&amp;quot;api/v1/users&amp;quot;
      data-authed=&amp;quot;1&amp;quot;
      data-hasfiles=&amp;quot;0&amp;quot;
      data-isarraybody=&amp;quot;0&amp;quot;
      autocomplete=&amp;quot;off&amp;quot;
      onsubmit=&amp;quot;event.preventDefault(); executeTryOut(&amp;#039;GETapi-v1-users&amp;#039;, this);&amp;quot;&amp;gt;
    &amp;lt;h3&amp;gt;
        Request&amp;amp;nbsp;&amp;amp;nbsp;&amp;amp;nbsp;
                    &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-tryout-GETapi-v1-users&amp;quot;
                    onclick=&amp;quot;tryItOut(&amp;#039;GETapi-v1-users&amp;#039;);&amp;quot;&amp;gt;Try it out ⚡
            &amp;lt;/button&amp;gt;
            &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-canceltryout-GETapi-v1-users&amp;quot;
                    onclick=&amp;quot;cancelTryOut(&amp;#039;GETapi-v1-users&amp;#039;);&amp;quot; hidden&amp;gt;Cancel 🛑
            &amp;lt;/button&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
            &amp;lt;button type=&amp;quot;submit&amp;quot;
                    style=&amp;quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-executetryout-GETapi-v1-users&amp;quot;
                    data-initial-text=&amp;quot;Send Request 💥&amp;quot;
                    data-loading-text=&amp;quot;⏱ Sending...&amp;quot;
                    hidden&amp;gt;Send Request 💥
            &amp;lt;/button&amp;gt;
            &amp;lt;/h3&amp;gt;
            &amp;lt;p&amp;gt;
            &amp;lt;small class=&amp;quot;badge badge-green&amp;quot;&amp;gt;GET&amp;lt;/small&amp;gt;
            &amp;lt;b&amp;gt;&amp;lt;code&amp;gt;api/v1/users&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;
        &amp;lt;/p&amp;gt;
                &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;Headers&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Authorization&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Authorization&amp;quot; class=&amp;quot;auth-value&amp;quot;               data-endpoint=&amp;quot;GETapi-v1-users&amp;quot;
               value=&amp;quot;Bearer {YOUR_AUTH_KEY}&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;Bearer {YOUR_AUTH_KEY}&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Content-Type&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Content-Type&amp;quot;                data-endpoint=&amp;quot;GETapi-v1-users&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Accept&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Accept&amp;quot;                data-endpoint=&amp;quot;GETapi-v1-users&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                        &amp;lt;/form&amp;gt;

                    &amp;lt;h2 id=&amp;quot;endpoints-POSTapi-v1-users&amp;quot;&amp;gt;Store a newly created resource in storage.&amp;lt;/h2&amp;gt;

&amp;lt;p&amp;gt;
&amp;lt;small class=&amp;quot;badge badge-darkred&amp;quot;&amp;gt;requires authentication&amp;lt;/small&amp;gt;
&amp;lt;/p&amp;gt;



&amp;lt;span id=&amp;quot;example-requests-POSTapi-v1-users&amp;quot;&amp;gt;
&amp;lt;blockquote&amp;gt;Example request:&amp;lt;/blockquote&amp;gt;


&amp;lt;div class=&amp;quot;bash-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-bash&amp;quot;&amp;gt;curl --request POST \
    &amp;quot;http://tickets-api.test/api/v1/users&amp;quot; \
    --header &amp;quot;Authorization: Bearer {YOUR_AUTH_KEY}&amp;quot; \
    --header &amp;quot;Content-Type: application/json&amp;quot; \
    --header &amp;quot;Accept: application/json&amp;quot; \
    --data &amp;quot;{
    \&amp;quot;data\&amp;quot;: {
        \&amp;quot;attributes\&amp;quot;: {
            \&amp;quot;name\&amp;quot;: \&amp;quot;optio\&amp;quot;,
            \&amp;quot;email\&amp;quot;: \&amp;quot;dibbert.bernadette@example.com\&amp;quot;,
            \&amp;quot;isManager\&amp;quot;: true,
            \&amp;quot;password\&amp;quot;: \&amp;quot;^qm^l[`M0\\\\^G+#L\&amp;quot;
        }
    }
}&amp;quot;
&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;


&amp;lt;div class=&amp;quot;javascript-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-javascript&amp;quot;&amp;gt;const url = new URL(
    &amp;quot;http://tickets-api.test/api/v1/users&amp;quot;
);

const headers = {
    &amp;quot;Authorization&amp;quot;: &amp;quot;Bearer {YOUR_AUTH_KEY}&amp;quot;,
    &amp;quot;Content-Type&amp;quot;: &amp;quot;application/json&amp;quot;,
    &amp;quot;Accept&amp;quot;: &amp;quot;application/json&amp;quot;,
};

let body = {
    &amp;quot;data&amp;quot;: {
        &amp;quot;attributes&amp;quot;: {
            &amp;quot;name&amp;quot;: &amp;quot;optio&amp;quot;,
            &amp;quot;email&amp;quot;: &amp;quot;dibbert.bernadette@example.com&amp;quot;,
            &amp;quot;isManager&amp;quot;: true,
            &amp;quot;password&amp;quot;: &amp;quot;^qm^l[`M0\\^G+#L&amp;quot;
        }
    }
};

fetch(url, {
    method: &amp;quot;POST&amp;quot;,
    headers,
    body: JSON.stringify(body),
}).then(response =&amp;amp;gt; response.json());&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;

&amp;lt;/span&amp;gt;

&amp;lt;span id=&amp;quot;example-responses-POSTapi-v1-users&amp;quot;&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-results-POSTapi-v1-users&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Received response&amp;lt;span
                id=&amp;quot;execution-response-status-POSTapi-v1-users&amp;quot;&amp;gt;&amp;lt;/span&amp;gt;:
    &amp;lt;/blockquote&amp;gt;
    &amp;lt;pre class=&amp;quot;json&amp;quot;&amp;gt;&amp;lt;code id=&amp;quot;execution-response-content-POSTapi-v1-users&amp;quot;
      data-empty-response-text=&amp;quot;&amp;lt;Empty response&amp;gt;&amp;quot; style=&amp;quot;max-height: 400px;&amp;quot;&amp;gt;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-error-POSTapi-v1-users&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Request failed with error:&amp;lt;/blockquote&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code id=&amp;quot;execution-error-message-POSTapi-v1-users&amp;quot;&amp;gt;

Tip: Check that you&amp;amp;#039;re properly connected to the network.
If you&amp;amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;form id=&amp;quot;form-POSTapi-v1-users&amp;quot; data-method=&amp;quot;POST&amp;quot;
      data-path=&amp;quot;api/v1/users&amp;quot;
      data-authed=&amp;quot;1&amp;quot;
      data-hasfiles=&amp;quot;0&amp;quot;
      data-isarraybody=&amp;quot;0&amp;quot;
      autocomplete=&amp;quot;off&amp;quot;
      onsubmit=&amp;quot;event.preventDefault(); executeTryOut(&amp;#039;POSTapi-v1-users&amp;#039;, this);&amp;quot;&amp;gt;
    &amp;lt;h3&amp;gt;
        Request&amp;amp;nbsp;&amp;amp;nbsp;&amp;amp;nbsp;
                    &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-tryout-POSTapi-v1-users&amp;quot;
                    onclick=&amp;quot;tryItOut(&amp;#039;POSTapi-v1-users&amp;#039;);&amp;quot;&amp;gt;Try it out ⚡
            &amp;lt;/button&amp;gt;
            &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-canceltryout-POSTapi-v1-users&amp;quot;
                    onclick=&amp;quot;cancelTryOut(&amp;#039;POSTapi-v1-users&amp;#039;);&amp;quot; hidden&amp;gt;Cancel 🛑
            &amp;lt;/button&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
            &amp;lt;button type=&amp;quot;submit&amp;quot;
                    style=&amp;quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-executetryout-POSTapi-v1-users&amp;quot;
                    data-initial-text=&amp;quot;Send Request 💥&amp;quot;
                    data-loading-text=&amp;quot;⏱ Sending...&amp;quot;
                    hidden&amp;gt;Send Request 💥
            &amp;lt;/button&amp;gt;
            &amp;lt;/h3&amp;gt;
            &amp;lt;p&amp;gt;
            &amp;lt;small class=&amp;quot;badge badge-black&amp;quot;&amp;gt;POST&amp;lt;/small&amp;gt;
            &amp;lt;b&amp;gt;&amp;lt;code&amp;gt;api/v1/users&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;
        &amp;lt;/p&amp;gt;
                &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;Headers&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Authorization&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Authorization&amp;quot; class=&amp;quot;auth-value&amp;quot;               data-endpoint=&amp;quot;POSTapi-v1-users&amp;quot;
               value=&amp;quot;Bearer {YOUR_AUTH_KEY}&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;Bearer {YOUR_AUTH_KEY}&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Content-Type&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Content-Type&amp;quot;                data-endpoint=&amp;quot;POSTapi-v1-users&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Accept&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Accept&amp;quot;                data-endpoint=&amp;quot;POSTapi-v1-users&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;Body Parameters&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
        &amp;lt;div style=&amp;quot; padding-left: 28px;  clear: unset;&amp;quot;&amp;gt;
        &amp;lt;details&amp;gt;
            &amp;lt;summary style=&amp;quot;padding-bottom: 10px;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;data&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;object&amp;lt;/small&amp;gt;&amp;amp;nbsp;
&amp;lt;i&amp;gt;optional&amp;lt;/i&amp;gt; &amp;amp;nbsp;
&amp;lt;br&amp;gt;

            &amp;lt;/summary&amp;gt;
                                                &amp;lt;div style=&amp;quot; margin-left: 14px; clear: unset;&amp;quot;&amp;gt;
        &amp;lt;details&amp;gt;
            &amp;lt;summary style=&amp;quot;padding-bottom: 10px;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;attributes&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;object&amp;lt;/small&amp;gt;&amp;amp;nbsp;
&amp;lt;i&amp;gt;optional&amp;lt;/i&amp;gt; &amp;amp;nbsp;
&amp;lt;br&amp;gt;

            &amp;lt;/summary&amp;gt;
                                                &amp;lt;div style=&amp;quot;margin-left: 28px; clear: unset;&amp;quot;&amp;gt;
                        &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;name&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;string&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;data.attributes.name&amp;quot;                data-endpoint=&amp;quot;POSTapi-v1-users&amp;quot;
               value=&amp;quot;optio&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;optio&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
                    &amp;lt;/div&amp;gt;
                                                                &amp;lt;div style=&amp;quot;margin-left: 28px; clear: unset;&amp;quot;&amp;gt;
                        &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;email&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;string&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;data.attributes.email&amp;quot;                data-endpoint=&amp;quot;POSTapi-v1-users&amp;quot;
               value=&amp;quot;dibbert.bernadette@example.com&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Must be a valid email address. Example: &amp;lt;code&amp;gt;dibbert.bernadette@example.com&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
                    &amp;lt;/div&amp;gt;
                                                                &amp;lt;div style=&amp;quot;margin-left: 28px; clear: unset;&amp;quot;&amp;gt;
                        &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;isManager&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;boolean&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;label data-endpoint=&amp;quot;POSTapi-v1-users&amp;quot; style=&amp;quot;display: none&amp;quot;&amp;gt;
            &amp;lt;input type=&amp;quot;radio&amp;quot; name=&amp;quot;data.attributes.isManager&amp;quot;
                   value=&amp;quot;true&amp;quot;
                   data-endpoint=&amp;quot;POSTapi-v1-users&amp;quot;
                   data-component=&amp;quot;body&amp;quot;             &amp;gt;
            &amp;lt;code&amp;gt;true&amp;lt;/code&amp;gt;
        &amp;lt;/label&amp;gt;
        &amp;lt;label data-endpoint=&amp;quot;POSTapi-v1-users&amp;quot; style=&amp;quot;display: none&amp;quot;&amp;gt;
            &amp;lt;input type=&amp;quot;radio&amp;quot; name=&amp;quot;data.attributes.isManager&amp;quot;
                   value=&amp;quot;false&amp;quot;
                   data-endpoint=&amp;quot;POSTapi-v1-users&amp;quot;
                   data-component=&amp;quot;body&amp;quot;             &amp;gt;
            &amp;lt;code&amp;gt;false&amp;lt;/code&amp;gt;
        &amp;lt;/label&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;true&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
                    &amp;lt;/div&amp;gt;
                                                                &amp;lt;div style=&amp;quot;margin-left: 28px; clear: unset;&amp;quot;&amp;gt;
                        &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;password&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;string&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;data.attributes.password&amp;quot;                data-endpoint=&amp;quot;POSTapi-v1-users&amp;quot;
               value=&amp;quot;^qm^l[`M0\^G+#L&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;^qm^l[&amp;lt;/code&amp;gt;M0\^G+#L`&amp;lt;/p&amp;gt;
                    &amp;lt;/div&amp;gt;
                                    &amp;lt;/details&amp;gt;
        &amp;lt;/div&amp;gt;
                                        &amp;lt;/details&amp;gt;
        &amp;lt;/div&amp;gt;
        &amp;lt;/form&amp;gt;

                    &amp;lt;h2 id=&amp;quot;endpoints-GETapi-v1-users--id-&amp;quot;&amp;gt;Display the specified resource.&amp;lt;/h2&amp;gt;

&amp;lt;p&amp;gt;
&amp;lt;small class=&amp;quot;badge badge-darkred&amp;quot;&amp;gt;requires authentication&amp;lt;/small&amp;gt;
&amp;lt;/p&amp;gt;



&amp;lt;span id=&amp;quot;example-requests-GETapi-v1-users--id-&amp;quot;&amp;gt;
&amp;lt;blockquote&amp;gt;Example request:&amp;lt;/blockquote&amp;gt;


&amp;lt;div class=&amp;quot;bash-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-bash&amp;quot;&amp;gt;curl --request GET \
    --get &amp;quot;http://tickets-api.test/api/v1/users/1&amp;quot; \
    --header &amp;quot;Authorization: Bearer {YOUR_AUTH_KEY}&amp;quot; \
    --header &amp;quot;Content-Type: application/json&amp;quot; \
    --header &amp;quot;Accept: application/json&amp;quot;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;


&amp;lt;div class=&amp;quot;javascript-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-javascript&amp;quot;&amp;gt;const url = new URL(
    &amp;quot;http://tickets-api.test/api/v1/users/1&amp;quot;
);

const headers = {
    &amp;quot;Authorization&amp;quot;: &amp;quot;Bearer {YOUR_AUTH_KEY}&amp;quot;,
    &amp;quot;Content-Type&amp;quot;: &amp;quot;application/json&amp;quot;,
    &amp;quot;Accept&amp;quot;: &amp;quot;application/json&amp;quot;,
};

fetch(url, {
    method: &amp;quot;GET&amp;quot;,
    headers,
}).then(response =&amp;amp;gt; response.json());&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;

&amp;lt;/span&amp;gt;

&amp;lt;span id=&amp;quot;example-responses-GETapi-v1-users--id-&amp;quot;&amp;gt;
            &amp;lt;blockquote&amp;gt;
            &amp;lt;p&amp;gt;Example response (200):&amp;lt;/p&amp;gt;
        &amp;lt;/blockquote&amp;gt;
                &amp;lt;details class=&amp;quot;annotation&amp;quot;&amp;gt;
            &amp;lt;summary style=&amp;quot;cursor: pointer;&amp;quot;&amp;gt;
                &amp;lt;small onclick=&amp;quot;textContent = parentElement.parentElement.open ? &amp;#039;Show headers&amp;#039; : &amp;#039;Hide headers&amp;#039;&amp;quot;&amp;gt;Show headers&amp;lt;/small&amp;gt;
            &amp;lt;/summary&amp;gt;
            &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-http&amp;quot;&amp;gt;cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 &amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/details&amp;gt;         &amp;lt;pre&amp;gt;

&amp;lt;code class=&amp;quot;language-json&amp;quot; style=&amp;quot;max-height: 300px;&amp;quot;&amp;gt;{
    &amp;amp;quot;data&amp;amp;quot;: {
        &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;user&amp;amp;quot;,
        &amp;amp;quot;id&amp;amp;quot;: 1,
        &amp;amp;quot;attributes&amp;amp;quot;: {
            &amp;amp;quot;name&amp;amp;quot;: &amp;amp;quot;Jayce Effertz&amp;amp;quot;,
            &amp;amp;quot;email&amp;amp;quot;: &amp;amp;quot;elijah.miller@example.com&amp;amp;quot;,
            &amp;amp;quot;isManager&amp;amp;quot;: false
        },
        &amp;amp;quot;links&amp;amp;quot;: {
            &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors/1&amp;amp;quot;
        }
    }
}&amp;lt;/code&amp;gt;
 &amp;lt;/pre&amp;gt;
    &amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-results-GETapi-v1-users--id-&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Received response&amp;lt;span
                id=&amp;quot;execution-response-status-GETapi-v1-users--id-&amp;quot;&amp;gt;&amp;lt;/span&amp;gt;:
    &amp;lt;/blockquote&amp;gt;
    &amp;lt;pre class=&amp;quot;json&amp;quot;&amp;gt;&amp;lt;code id=&amp;quot;execution-response-content-GETapi-v1-users--id-&amp;quot;
      data-empty-response-text=&amp;quot;&amp;lt;Empty response&amp;gt;&amp;quot; style=&amp;quot;max-height: 400px;&amp;quot;&amp;gt;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-error-GETapi-v1-users--id-&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Request failed with error:&amp;lt;/blockquote&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code id=&amp;quot;execution-error-message-GETapi-v1-users--id-&amp;quot;&amp;gt;

Tip: Check that you&amp;amp;#039;re properly connected to the network.
If you&amp;amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;form id=&amp;quot;form-GETapi-v1-users--id-&amp;quot; data-method=&amp;quot;GET&amp;quot;
      data-path=&amp;quot;api/v1/users/{id}&amp;quot;
      data-authed=&amp;quot;1&amp;quot;
      data-hasfiles=&amp;quot;0&amp;quot;
      data-isarraybody=&amp;quot;0&amp;quot;
      autocomplete=&amp;quot;off&amp;quot;
      onsubmit=&amp;quot;event.preventDefault(); executeTryOut(&amp;#039;GETapi-v1-users--id-&amp;#039;, this);&amp;quot;&amp;gt;
    &amp;lt;h3&amp;gt;
        Request&amp;amp;nbsp;&amp;amp;nbsp;&amp;amp;nbsp;
                    &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-tryout-GETapi-v1-users--id-&amp;quot;
                    onclick=&amp;quot;tryItOut(&amp;#039;GETapi-v1-users--id-&amp;#039;);&amp;quot;&amp;gt;Try it out ⚡
            &amp;lt;/button&amp;gt;
            &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-canceltryout-GETapi-v1-users--id-&amp;quot;
                    onclick=&amp;quot;cancelTryOut(&amp;#039;GETapi-v1-users--id-&amp;#039;);&amp;quot; hidden&amp;gt;Cancel 🛑
            &amp;lt;/button&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
            &amp;lt;button type=&amp;quot;submit&amp;quot;
                    style=&amp;quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-executetryout-GETapi-v1-users--id-&amp;quot;
                    data-initial-text=&amp;quot;Send Request 💥&amp;quot;
                    data-loading-text=&amp;quot;⏱ Sending...&amp;quot;
                    hidden&amp;gt;Send Request 💥
            &amp;lt;/button&amp;gt;
            &amp;lt;/h3&amp;gt;
            &amp;lt;p&amp;gt;
            &amp;lt;small class=&amp;quot;badge badge-green&amp;quot;&amp;gt;GET&amp;lt;/small&amp;gt;
            &amp;lt;b&amp;gt;&amp;lt;code&amp;gt;api/v1/users/{id}&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;
        &amp;lt;/p&amp;gt;
                &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;Headers&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Authorization&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Authorization&amp;quot; class=&amp;quot;auth-value&amp;quot;               data-endpoint=&amp;quot;GETapi-v1-users--id-&amp;quot;
               value=&amp;quot;Bearer {YOUR_AUTH_KEY}&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;Bearer {YOUR_AUTH_KEY}&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Content-Type&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Content-Type&amp;quot;                data-endpoint=&amp;quot;GETapi-v1-users--id-&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Accept&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Accept&amp;quot;                data-endpoint=&amp;quot;GETapi-v1-users--id-&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                        &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;URL Parameters&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                    &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;id&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;integer&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;number&amp;quot; style=&amp;quot;display: none&amp;quot;
               step=&amp;quot;any&amp;quot;               name=&amp;quot;id&amp;quot;                data-endpoint=&amp;quot;GETapi-v1-users--id-&amp;quot;
               value=&amp;quot;1&amp;quot;
               data-component=&amp;quot;url&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;The ID of the user. Example: &amp;lt;code&amp;gt;1&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                    &amp;lt;/form&amp;gt;

                    &amp;lt;h2 id=&amp;quot;endpoints-DELETEapi-v1-users--id-&amp;quot;&amp;gt;Remove the specified resource from storage.&amp;lt;/h2&amp;gt;

&amp;lt;p&amp;gt;
&amp;lt;small class=&amp;quot;badge badge-darkred&amp;quot;&amp;gt;requires authentication&amp;lt;/small&amp;gt;
&amp;lt;/p&amp;gt;



&amp;lt;span id=&amp;quot;example-requests-DELETEapi-v1-users--id-&amp;quot;&amp;gt;
&amp;lt;blockquote&amp;gt;Example request:&amp;lt;/blockquote&amp;gt;


&amp;lt;div class=&amp;quot;bash-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-bash&amp;quot;&amp;gt;curl --request DELETE \
    &amp;quot;http://tickets-api.test/api/v1/users/1&amp;quot; \
    --header &amp;quot;Authorization: Bearer {YOUR_AUTH_KEY}&amp;quot; \
    --header &amp;quot;Content-Type: application/json&amp;quot; \
    --header &amp;quot;Accept: application/json&amp;quot;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;


&amp;lt;div class=&amp;quot;javascript-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-javascript&amp;quot;&amp;gt;const url = new URL(
    &amp;quot;http://tickets-api.test/api/v1/users/1&amp;quot;
);

const headers = {
    &amp;quot;Authorization&amp;quot;: &amp;quot;Bearer {YOUR_AUTH_KEY}&amp;quot;,
    &amp;quot;Content-Type&amp;quot;: &amp;quot;application/json&amp;quot;,
    &amp;quot;Accept&amp;quot;: &amp;quot;application/json&amp;quot;,
};

fetch(url, {
    method: &amp;quot;DELETE&amp;quot;,
    headers,
}).then(response =&amp;amp;gt; response.json());&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;

&amp;lt;/span&amp;gt;

&amp;lt;span id=&amp;quot;example-responses-DELETEapi-v1-users--id-&amp;quot;&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-results-DELETEapi-v1-users--id-&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Received response&amp;lt;span
                id=&amp;quot;execution-response-status-DELETEapi-v1-users--id-&amp;quot;&amp;gt;&amp;lt;/span&amp;gt;:
    &amp;lt;/blockquote&amp;gt;
    &amp;lt;pre class=&amp;quot;json&amp;quot;&amp;gt;&amp;lt;code id=&amp;quot;execution-response-content-DELETEapi-v1-users--id-&amp;quot;
      data-empty-response-text=&amp;quot;&amp;lt;Empty response&amp;gt;&amp;quot; style=&amp;quot;max-height: 400px;&amp;quot;&amp;gt;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-error-DELETEapi-v1-users--id-&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Request failed with error:&amp;lt;/blockquote&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code id=&amp;quot;execution-error-message-DELETEapi-v1-users--id-&amp;quot;&amp;gt;

Tip: Check that you&amp;amp;#039;re properly connected to the network.
If you&amp;amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;form id=&amp;quot;form-DELETEapi-v1-users--id-&amp;quot; data-method=&amp;quot;DELETE&amp;quot;
      data-path=&amp;quot;api/v1/users/{id}&amp;quot;
      data-authed=&amp;quot;1&amp;quot;
      data-hasfiles=&amp;quot;0&amp;quot;
      data-isarraybody=&amp;quot;0&amp;quot;
      autocomplete=&amp;quot;off&amp;quot;
      onsubmit=&amp;quot;event.preventDefault(); executeTryOut(&amp;#039;DELETEapi-v1-users--id-&amp;#039;, this);&amp;quot;&amp;gt;
    &amp;lt;h3&amp;gt;
        Request&amp;amp;nbsp;&amp;amp;nbsp;&amp;amp;nbsp;
                    &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-tryout-DELETEapi-v1-users--id-&amp;quot;
                    onclick=&amp;quot;tryItOut(&amp;#039;DELETEapi-v1-users--id-&amp;#039;);&amp;quot;&amp;gt;Try it out ⚡
            &amp;lt;/button&amp;gt;
            &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-canceltryout-DELETEapi-v1-users--id-&amp;quot;
                    onclick=&amp;quot;cancelTryOut(&amp;#039;DELETEapi-v1-users--id-&amp;#039;);&amp;quot; hidden&amp;gt;Cancel 🛑
            &amp;lt;/button&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
            &amp;lt;button type=&amp;quot;submit&amp;quot;
                    style=&amp;quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-executetryout-DELETEapi-v1-users--id-&amp;quot;
                    data-initial-text=&amp;quot;Send Request 💥&amp;quot;
                    data-loading-text=&amp;quot;⏱ Sending...&amp;quot;
                    hidden&amp;gt;Send Request 💥
            &amp;lt;/button&amp;gt;
            &amp;lt;/h3&amp;gt;
            &amp;lt;p&amp;gt;
            &amp;lt;small class=&amp;quot;badge badge-red&amp;quot;&amp;gt;DELETE&amp;lt;/small&amp;gt;
            &amp;lt;b&amp;gt;&amp;lt;code&amp;gt;api/v1/users/{id}&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;
        &amp;lt;/p&amp;gt;
                &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;Headers&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Authorization&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Authorization&amp;quot; class=&amp;quot;auth-value&amp;quot;               data-endpoint=&amp;quot;DELETEapi-v1-users--id-&amp;quot;
               value=&amp;quot;Bearer {YOUR_AUTH_KEY}&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;Bearer {YOUR_AUTH_KEY}&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Content-Type&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Content-Type&amp;quot;                data-endpoint=&amp;quot;DELETEapi-v1-users--id-&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Accept&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Accept&amp;quot;                data-endpoint=&amp;quot;DELETEapi-v1-users--id-&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                        &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;URL Parameters&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                    &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;id&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;integer&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;number&amp;quot; style=&amp;quot;display: none&amp;quot;
               step=&amp;quot;any&amp;quot;               name=&amp;quot;id&amp;quot;                data-endpoint=&amp;quot;DELETEapi-v1-users--id-&amp;quot;
               value=&amp;quot;1&amp;quot;
               data-component=&amp;quot;url&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;The ID of the user. Example: &amp;lt;code&amp;gt;1&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                    &amp;lt;/form&amp;gt;

                    &amp;lt;h2 id=&amp;quot;endpoints-PUTapi-v1-users--user_id-&amp;quot;&amp;gt;PUT api/v1/users/{user_id}&amp;lt;/h2&amp;gt;

&amp;lt;p&amp;gt;
&amp;lt;small class=&amp;quot;badge badge-darkred&amp;quot;&amp;gt;requires authentication&amp;lt;/small&amp;gt;
&amp;lt;/p&amp;gt;



&amp;lt;span id=&amp;quot;example-requests-PUTapi-v1-users--user_id-&amp;quot;&amp;gt;
&amp;lt;blockquote&amp;gt;Example request:&amp;lt;/blockquote&amp;gt;


&amp;lt;div class=&amp;quot;bash-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-bash&amp;quot;&amp;gt;curl --request PUT \
    &amp;quot;http://tickets-api.test/api/v1/users/1&amp;quot; \
    --header &amp;quot;Authorization: Bearer {YOUR_AUTH_KEY}&amp;quot; \
    --header &amp;quot;Content-Type: application/json&amp;quot; \
    --header &amp;quot;Accept: application/json&amp;quot; \
    --data &amp;quot;{
    \&amp;quot;data\&amp;quot;: {
        \&amp;quot;attributes\&amp;quot;: {
            \&amp;quot;name\&amp;quot;: \&amp;quot;repudiandae\&amp;quot;,
            \&amp;quot;email\&amp;quot;: \&amp;quot;mortimer07@example.net\&amp;quot;,
            \&amp;quot;isManager\&amp;quot;: false,
            \&amp;quot;password\&amp;quot;: \&amp;quot;}PoN@uKI\&amp;quot;
        }
    }
}&amp;quot;
&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;


&amp;lt;div class=&amp;quot;javascript-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-javascript&amp;quot;&amp;gt;const url = new URL(
    &amp;quot;http://tickets-api.test/api/v1/users/1&amp;quot;
);

const headers = {
    &amp;quot;Authorization&amp;quot;: &amp;quot;Bearer {YOUR_AUTH_KEY}&amp;quot;,
    &amp;quot;Content-Type&amp;quot;: &amp;quot;application/json&amp;quot;,
    &amp;quot;Accept&amp;quot;: &amp;quot;application/json&amp;quot;,
};

let body = {
    &amp;quot;data&amp;quot;: {
        &amp;quot;attributes&amp;quot;: {
            &amp;quot;name&amp;quot;: &amp;quot;repudiandae&amp;quot;,
            &amp;quot;email&amp;quot;: &amp;quot;mortimer07@example.net&amp;quot;,
            &amp;quot;isManager&amp;quot;: false,
            &amp;quot;password&amp;quot;: &amp;quot;}PoN@uKI&amp;quot;
        }
    }
};

fetch(url, {
    method: &amp;quot;PUT&amp;quot;,
    headers,
    body: JSON.stringify(body),
}).then(response =&amp;amp;gt; response.json());&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;

&amp;lt;/span&amp;gt;

&amp;lt;span id=&amp;quot;example-responses-PUTapi-v1-users--user_id-&amp;quot;&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-results-PUTapi-v1-users--user_id-&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Received response&amp;lt;span
                id=&amp;quot;execution-response-status-PUTapi-v1-users--user_id-&amp;quot;&amp;gt;&amp;lt;/span&amp;gt;:
    &amp;lt;/blockquote&amp;gt;
    &amp;lt;pre class=&amp;quot;json&amp;quot;&amp;gt;&amp;lt;code id=&amp;quot;execution-response-content-PUTapi-v1-users--user_id-&amp;quot;
      data-empty-response-text=&amp;quot;&amp;lt;Empty response&amp;gt;&amp;quot; style=&amp;quot;max-height: 400px;&amp;quot;&amp;gt;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-error-PUTapi-v1-users--user_id-&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Request failed with error:&amp;lt;/blockquote&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code id=&amp;quot;execution-error-message-PUTapi-v1-users--user_id-&amp;quot;&amp;gt;

Tip: Check that you&amp;amp;#039;re properly connected to the network.
If you&amp;amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;form id=&amp;quot;form-PUTapi-v1-users--user_id-&amp;quot; data-method=&amp;quot;PUT&amp;quot;
      data-path=&amp;quot;api/v1/users/{user_id}&amp;quot;
      data-authed=&amp;quot;1&amp;quot;
      data-hasfiles=&amp;quot;0&amp;quot;
      data-isarraybody=&amp;quot;0&amp;quot;
      autocomplete=&amp;quot;off&amp;quot;
      onsubmit=&amp;quot;event.preventDefault(); executeTryOut(&amp;#039;PUTapi-v1-users--user_id-&amp;#039;, this);&amp;quot;&amp;gt;
    &amp;lt;h3&amp;gt;
        Request&amp;amp;nbsp;&amp;amp;nbsp;&amp;amp;nbsp;
                    &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-tryout-PUTapi-v1-users--user_id-&amp;quot;
                    onclick=&amp;quot;tryItOut(&amp;#039;PUTapi-v1-users--user_id-&amp;#039;);&amp;quot;&amp;gt;Try it out ⚡
            &amp;lt;/button&amp;gt;
            &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-canceltryout-PUTapi-v1-users--user_id-&amp;quot;
                    onclick=&amp;quot;cancelTryOut(&amp;#039;PUTapi-v1-users--user_id-&amp;#039;);&amp;quot; hidden&amp;gt;Cancel 🛑
            &amp;lt;/button&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
            &amp;lt;button type=&amp;quot;submit&amp;quot;
                    style=&amp;quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-executetryout-PUTapi-v1-users--user_id-&amp;quot;
                    data-initial-text=&amp;quot;Send Request 💥&amp;quot;
                    data-loading-text=&amp;quot;⏱ Sending...&amp;quot;
                    hidden&amp;gt;Send Request 💥
            &amp;lt;/button&amp;gt;
            &amp;lt;/h3&amp;gt;
            &amp;lt;p&amp;gt;
            &amp;lt;small class=&amp;quot;badge badge-darkblue&amp;quot;&amp;gt;PUT&amp;lt;/small&amp;gt;
            &amp;lt;b&amp;gt;&amp;lt;code&amp;gt;api/v1/users/{user_id}&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;
        &amp;lt;/p&amp;gt;
                &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;Headers&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Authorization&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Authorization&amp;quot; class=&amp;quot;auth-value&amp;quot;               data-endpoint=&amp;quot;PUTapi-v1-users--user_id-&amp;quot;
               value=&amp;quot;Bearer {YOUR_AUTH_KEY}&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;Bearer {YOUR_AUTH_KEY}&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Content-Type&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Content-Type&amp;quot;                data-endpoint=&amp;quot;PUTapi-v1-users--user_id-&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Accept&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Accept&amp;quot;                data-endpoint=&amp;quot;PUTapi-v1-users--user_id-&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                        &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;URL Parameters&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                    &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;user_id&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;integer&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;number&amp;quot; style=&amp;quot;display: none&amp;quot;
               step=&amp;quot;any&amp;quot;               name=&amp;quot;user_id&amp;quot;                data-endpoint=&amp;quot;PUTapi-v1-users--user_id-&amp;quot;
               value=&amp;quot;1&amp;quot;
               data-component=&amp;quot;url&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;The ID of the user. Example: &amp;lt;code&amp;gt;1&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                            &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;Body Parameters&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
        &amp;lt;div style=&amp;quot; padding-left: 28px;  clear: unset;&amp;quot;&amp;gt;
        &amp;lt;details&amp;gt;
            &amp;lt;summary style=&amp;quot;padding-bottom: 10px;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;data&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;object&amp;lt;/small&amp;gt;&amp;amp;nbsp;
&amp;lt;i&amp;gt;optional&amp;lt;/i&amp;gt; &amp;amp;nbsp;
&amp;lt;br&amp;gt;

            &amp;lt;/summary&amp;gt;
                                                &amp;lt;div style=&amp;quot; margin-left: 14px; clear: unset;&amp;quot;&amp;gt;
        &amp;lt;details&amp;gt;
            &amp;lt;summary style=&amp;quot;padding-bottom: 10px;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;attributes&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;object&amp;lt;/small&amp;gt;&amp;amp;nbsp;
&amp;lt;i&amp;gt;optional&amp;lt;/i&amp;gt; &amp;amp;nbsp;
&amp;lt;br&amp;gt;

            &amp;lt;/summary&amp;gt;
                                                &amp;lt;div style=&amp;quot;margin-left: 28px; clear: unset;&amp;quot;&amp;gt;
                        &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;name&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;string&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;data.attributes.name&amp;quot;                data-endpoint=&amp;quot;PUTapi-v1-users--user_id-&amp;quot;
               value=&amp;quot;repudiandae&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;repudiandae&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
                    &amp;lt;/div&amp;gt;
                                                                &amp;lt;div style=&amp;quot;margin-left: 28px; clear: unset;&amp;quot;&amp;gt;
                        &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;email&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;string&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;data.attributes.email&amp;quot;                data-endpoint=&amp;quot;PUTapi-v1-users--user_id-&amp;quot;
               value=&amp;quot;mortimer07@example.net&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Must be a valid email address. Example: &amp;lt;code&amp;gt;mortimer07@example.net&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
                    &amp;lt;/div&amp;gt;
                                                                &amp;lt;div style=&amp;quot;margin-left: 28px; clear: unset;&amp;quot;&amp;gt;
                        &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;isManager&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;boolean&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;label data-endpoint=&amp;quot;PUTapi-v1-users--user_id-&amp;quot; style=&amp;quot;display: none&amp;quot;&amp;gt;
            &amp;lt;input type=&amp;quot;radio&amp;quot; name=&amp;quot;data.attributes.isManager&amp;quot;
                   value=&amp;quot;true&amp;quot;
                   data-endpoint=&amp;quot;PUTapi-v1-users--user_id-&amp;quot;
                   data-component=&amp;quot;body&amp;quot;             &amp;gt;
            &amp;lt;code&amp;gt;true&amp;lt;/code&amp;gt;
        &amp;lt;/label&amp;gt;
        &amp;lt;label data-endpoint=&amp;quot;PUTapi-v1-users--user_id-&amp;quot; style=&amp;quot;display: none&amp;quot;&amp;gt;
            &amp;lt;input type=&amp;quot;radio&amp;quot; name=&amp;quot;data.attributes.isManager&amp;quot;
                   value=&amp;quot;false&amp;quot;
                   data-endpoint=&amp;quot;PUTapi-v1-users--user_id-&amp;quot;
                   data-component=&amp;quot;body&amp;quot;             &amp;gt;
            &amp;lt;code&amp;gt;false&amp;lt;/code&amp;gt;
        &amp;lt;/label&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;false&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
                    &amp;lt;/div&amp;gt;
                                                                &amp;lt;div style=&amp;quot;margin-left: 28px; clear: unset;&amp;quot;&amp;gt;
                        &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;password&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;string&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;data.attributes.password&amp;quot;                data-endpoint=&amp;quot;PUTapi-v1-users--user_id-&amp;quot;
               value=&amp;quot;}PoN@uKI&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;}PoN@uKI&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
                    &amp;lt;/div&amp;gt;
                                    &amp;lt;/details&amp;gt;
        &amp;lt;/div&amp;gt;
                                        &amp;lt;/details&amp;gt;
        &amp;lt;/div&amp;gt;
        &amp;lt;/form&amp;gt;

                    &amp;lt;h2 id=&amp;quot;endpoints-PATCHapi-v1-users--user_id-&amp;quot;&amp;gt;Update the specified resource in storage.&amp;lt;/h2&amp;gt;

&amp;lt;p&amp;gt;
&amp;lt;small class=&amp;quot;badge badge-darkred&amp;quot;&amp;gt;requires authentication&amp;lt;/small&amp;gt;
&amp;lt;/p&amp;gt;



&amp;lt;span id=&amp;quot;example-requests-PATCHapi-v1-users--user_id-&amp;quot;&amp;gt;
&amp;lt;blockquote&amp;gt;Example request:&amp;lt;/blockquote&amp;gt;


&amp;lt;div class=&amp;quot;bash-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-bash&amp;quot;&amp;gt;curl --request PATCH \
    &amp;quot;http://tickets-api.test/api/v1/users/1&amp;quot; \
    --header &amp;quot;Authorization: Bearer {YOUR_AUTH_KEY}&amp;quot; \
    --header &amp;quot;Content-Type: application/json&amp;quot; \
    --header &amp;quot;Accept: application/json&amp;quot; \
    --data &amp;quot;{
    \&amp;quot;data\&amp;quot;: {
        \&amp;quot;attributes\&amp;quot;: {
            \&amp;quot;name\&amp;quot;: \&amp;quot;expedita\&amp;quot;,
            \&amp;quot;email\&amp;quot;: \&amp;quot;wzboncak@example.org\&amp;quot;,
            \&amp;quot;isManager\&amp;quot;: false,
            \&amp;quot;password\&amp;quot;: \&amp;quot;}N1\&amp;#039;6J_\&amp;#039;|5l26\&amp;quot;
        }
    }
}&amp;quot;
&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;


&amp;lt;div class=&amp;quot;javascript-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-javascript&amp;quot;&amp;gt;const url = new URL(
    &amp;quot;http://tickets-api.test/api/v1/users/1&amp;quot;
);

const headers = {
    &amp;quot;Authorization&amp;quot;: &amp;quot;Bearer {YOUR_AUTH_KEY}&amp;quot;,
    &amp;quot;Content-Type&amp;quot;: &amp;quot;application/json&amp;quot;,
    &amp;quot;Accept&amp;quot;: &amp;quot;application/json&amp;quot;,
};

let body = {
    &amp;quot;data&amp;quot;: {
        &amp;quot;attributes&amp;quot;: {
            &amp;quot;name&amp;quot;: &amp;quot;expedita&amp;quot;,
            &amp;quot;email&amp;quot;: &amp;quot;wzboncak@example.org&amp;quot;,
            &amp;quot;isManager&amp;quot;: false,
            &amp;quot;password&amp;quot;: &amp;quot;}N1&amp;#039;6J_&amp;#039;|5l26&amp;quot;
        }
    }
};

fetch(url, {
    method: &amp;quot;PATCH&amp;quot;,
    headers,
    body: JSON.stringify(body),
}).then(response =&amp;amp;gt; response.json());&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;

&amp;lt;/span&amp;gt;

&amp;lt;span id=&amp;quot;example-responses-PATCHapi-v1-users--user_id-&amp;quot;&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-results-PATCHapi-v1-users--user_id-&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Received response&amp;lt;span
                id=&amp;quot;execution-response-status-PATCHapi-v1-users--user_id-&amp;quot;&amp;gt;&amp;lt;/span&amp;gt;:
    &amp;lt;/blockquote&amp;gt;
    &amp;lt;pre class=&amp;quot;json&amp;quot;&amp;gt;&amp;lt;code id=&amp;quot;execution-response-content-PATCHapi-v1-users--user_id-&amp;quot;
      data-empty-response-text=&amp;quot;&amp;lt;Empty response&amp;gt;&amp;quot; style=&amp;quot;max-height: 400px;&amp;quot;&amp;gt;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-error-PATCHapi-v1-users--user_id-&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Request failed with error:&amp;lt;/blockquote&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code id=&amp;quot;execution-error-message-PATCHapi-v1-users--user_id-&amp;quot;&amp;gt;

Tip: Check that you&amp;amp;#039;re properly connected to the network.
If you&amp;amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;form id=&amp;quot;form-PATCHapi-v1-users--user_id-&amp;quot; data-method=&amp;quot;PATCH&amp;quot;
      data-path=&amp;quot;api/v1/users/{user_id}&amp;quot;
      data-authed=&amp;quot;1&amp;quot;
      data-hasfiles=&amp;quot;0&amp;quot;
      data-isarraybody=&amp;quot;0&amp;quot;
      autocomplete=&amp;quot;off&amp;quot;
      onsubmit=&amp;quot;event.preventDefault(); executeTryOut(&amp;#039;PATCHapi-v1-users--user_id-&amp;#039;, this);&amp;quot;&amp;gt;
    &amp;lt;h3&amp;gt;
        Request&amp;amp;nbsp;&amp;amp;nbsp;&amp;amp;nbsp;
                    &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-tryout-PATCHapi-v1-users--user_id-&amp;quot;
                    onclick=&amp;quot;tryItOut(&amp;#039;PATCHapi-v1-users--user_id-&amp;#039;);&amp;quot;&amp;gt;Try it out ⚡
            &amp;lt;/button&amp;gt;
            &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-canceltryout-PATCHapi-v1-users--user_id-&amp;quot;
                    onclick=&amp;quot;cancelTryOut(&amp;#039;PATCHapi-v1-users--user_id-&amp;#039;);&amp;quot; hidden&amp;gt;Cancel 🛑
            &amp;lt;/button&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
            &amp;lt;button type=&amp;quot;submit&amp;quot;
                    style=&amp;quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-executetryout-PATCHapi-v1-users--user_id-&amp;quot;
                    data-initial-text=&amp;quot;Send Request 💥&amp;quot;
                    data-loading-text=&amp;quot;⏱ Sending...&amp;quot;
                    hidden&amp;gt;Send Request 💥
            &amp;lt;/button&amp;gt;
            &amp;lt;/h3&amp;gt;
            &amp;lt;p&amp;gt;
            &amp;lt;small class=&amp;quot;badge badge-purple&amp;quot;&amp;gt;PATCH&amp;lt;/small&amp;gt;
            &amp;lt;b&amp;gt;&amp;lt;code&amp;gt;api/v1/users/{user_id}&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;
        &amp;lt;/p&amp;gt;
                &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;Headers&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Authorization&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Authorization&amp;quot; class=&amp;quot;auth-value&amp;quot;               data-endpoint=&amp;quot;PATCHapi-v1-users--user_id-&amp;quot;
               value=&amp;quot;Bearer {YOUR_AUTH_KEY}&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;Bearer {YOUR_AUTH_KEY}&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Content-Type&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Content-Type&amp;quot;                data-endpoint=&amp;quot;PATCHapi-v1-users--user_id-&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Accept&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Accept&amp;quot;                data-endpoint=&amp;quot;PATCHapi-v1-users--user_id-&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                        &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;URL Parameters&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                    &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;user_id&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;integer&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;number&amp;quot; style=&amp;quot;display: none&amp;quot;
               step=&amp;quot;any&amp;quot;               name=&amp;quot;user_id&amp;quot;                data-endpoint=&amp;quot;PATCHapi-v1-users--user_id-&amp;quot;
               value=&amp;quot;1&amp;quot;
               data-component=&amp;quot;url&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;The ID of the user. Example: &amp;lt;code&amp;gt;1&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                            &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;Body Parameters&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
        &amp;lt;div style=&amp;quot; padding-left: 28px;  clear: unset;&amp;quot;&amp;gt;
        &amp;lt;details&amp;gt;
            &amp;lt;summary style=&amp;quot;padding-bottom: 10px;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;data&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;object&amp;lt;/small&amp;gt;&amp;amp;nbsp;
&amp;lt;i&amp;gt;optional&amp;lt;/i&amp;gt; &amp;amp;nbsp;
&amp;lt;br&amp;gt;

            &amp;lt;/summary&amp;gt;
                                                &amp;lt;div style=&amp;quot; margin-left: 14px; clear: unset;&amp;quot;&amp;gt;
        &amp;lt;details&amp;gt;
            &amp;lt;summary style=&amp;quot;padding-bottom: 10px;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;attributes&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;object&amp;lt;/small&amp;gt;&amp;amp;nbsp;
&amp;lt;i&amp;gt;optional&amp;lt;/i&amp;gt; &amp;amp;nbsp;
&amp;lt;br&amp;gt;

            &amp;lt;/summary&amp;gt;
                                                &amp;lt;div style=&amp;quot;margin-left: 28px; clear: unset;&amp;quot;&amp;gt;
                        &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;name&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;string&amp;lt;/small&amp;gt;&amp;amp;nbsp;
&amp;lt;i&amp;gt;optional&amp;lt;/i&amp;gt; &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;data.attributes.name&amp;quot;                data-endpoint=&amp;quot;PATCHapi-v1-users--user_id-&amp;quot;
               value=&amp;quot;expedita&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;expedita&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
                    &amp;lt;/div&amp;gt;
                                                                &amp;lt;div style=&amp;quot;margin-left: 28px; clear: unset;&amp;quot;&amp;gt;
                        &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;email&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;string&amp;lt;/small&amp;gt;&amp;amp;nbsp;
&amp;lt;i&amp;gt;optional&amp;lt;/i&amp;gt; &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;data.attributes.email&amp;quot;                data-endpoint=&amp;quot;PATCHapi-v1-users--user_id-&amp;quot;
               value=&amp;quot;wzboncak@example.org&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Must be a valid email address. Example: &amp;lt;code&amp;gt;wzboncak@example.org&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
                    &amp;lt;/div&amp;gt;
                                                                &amp;lt;div style=&amp;quot;margin-left: 28px; clear: unset;&amp;quot;&amp;gt;
                        &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;isManager&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;boolean&amp;lt;/small&amp;gt;&amp;amp;nbsp;
&amp;lt;i&amp;gt;optional&amp;lt;/i&amp;gt; &amp;amp;nbsp;
                &amp;lt;label data-endpoint=&amp;quot;PATCHapi-v1-users--user_id-&amp;quot; style=&amp;quot;display: none&amp;quot;&amp;gt;
            &amp;lt;input type=&amp;quot;radio&amp;quot; name=&amp;quot;data.attributes.isManager&amp;quot;
                   value=&amp;quot;true&amp;quot;
                   data-endpoint=&amp;quot;PATCHapi-v1-users--user_id-&amp;quot;
                   data-component=&amp;quot;body&amp;quot;             &amp;gt;
            &amp;lt;code&amp;gt;true&amp;lt;/code&amp;gt;
        &amp;lt;/label&amp;gt;
        &amp;lt;label data-endpoint=&amp;quot;PATCHapi-v1-users--user_id-&amp;quot; style=&amp;quot;display: none&amp;quot;&amp;gt;
            &amp;lt;input type=&amp;quot;radio&amp;quot; name=&amp;quot;data.attributes.isManager&amp;quot;
                   value=&amp;quot;false&amp;quot;
                   data-endpoint=&amp;quot;PATCHapi-v1-users--user_id-&amp;quot;
                   data-component=&amp;quot;body&amp;quot;             &amp;gt;
            &amp;lt;code&amp;gt;false&amp;lt;/code&amp;gt;
        &amp;lt;/label&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;false&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
                    &amp;lt;/div&amp;gt;
                                                                &amp;lt;div style=&amp;quot;margin-left: 28px; clear: unset;&amp;quot;&amp;gt;
                        &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;password&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;string&amp;lt;/small&amp;gt;&amp;amp;nbsp;
&amp;lt;i&amp;gt;optional&amp;lt;/i&amp;gt; &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;data.attributes.password&amp;quot;                data-endpoint=&amp;quot;PATCHapi-v1-users--user_id-&amp;quot;
               value=&amp;quot;}N1&amp;#039;6J_&amp;#039;|5l26&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;}N1&amp;#039;6J_&amp;#039;|5l26&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
                    &amp;lt;/div&amp;gt;
                                    &amp;lt;/details&amp;gt;
        &amp;lt;/div&amp;gt;
                                        &amp;lt;/details&amp;gt;
        &amp;lt;/div&amp;gt;
        &amp;lt;/form&amp;gt;

                    &amp;lt;h2 id=&amp;quot;endpoints-GETapi-v1-authors&amp;quot;&amp;gt;Display a listing of the resource.&amp;lt;/h2&amp;gt;

&amp;lt;p&amp;gt;
&amp;lt;small class=&amp;quot;badge badge-darkred&amp;quot;&amp;gt;requires authentication&amp;lt;/small&amp;gt;
&amp;lt;/p&amp;gt;



&amp;lt;span id=&amp;quot;example-requests-GETapi-v1-authors&amp;quot;&amp;gt;
&amp;lt;blockquote&amp;gt;Example request:&amp;lt;/blockquote&amp;gt;


&amp;lt;div class=&amp;quot;bash-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-bash&amp;quot;&amp;gt;curl --request GET \
    --get &amp;quot;http://tickets-api.test/api/v1/authors&amp;quot; \
    --header &amp;quot;Authorization: Bearer {YOUR_AUTH_KEY}&amp;quot; \
    --header &amp;quot;Content-Type: application/json&amp;quot; \
    --header &amp;quot;Accept: application/json&amp;quot;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;


&amp;lt;div class=&amp;quot;javascript-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-javascript&amp;quot;&amp;gt;const url = new URL(
    &amp;quot;http://tickets-api.test/api/v1/authors&amp;quot;
);

const headers = {
    &amp;quot;Authorization&amp;quot;: &amp;quot;Bearer {YOUR_AUTH_KEY}&amp;quot;,
    &amp;quot;Content-Type&amp;quot;: &amp;quot;application/json&amp;quot;,
    &amp;quot;Accept&amp;quot;: &amp;quot;application/json&amp;quot;,
};

fetch(url, {
    method: &amp;quot;GET&amp;quot;,
    headers,
}).then(response =&amp;amp;gt; response.json());&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;

&amp;lt;/span&amp;gt;

&amp;lt;span id=&amp;quot;example-responses-GETapi-v1-authors&amp;quot;&amp;gt;
            &amp;lt;blockquote&amp;gt;
            &amp;lt;p&amp;gt;Example response (200):&amp;lt;/p&amp;gt;
        &amp;lt;/blockquote&amp;gt;
                &amp;lt;details class=&amp;quot;annotation&amp;quot;&amp;gt;
            &amp;lt;summary style=&amp;quot;cursor: pointer;&amp;quot;&amp;gt;
                &amp;lt;small onclick=&amp;quot;textContent = parentElement.parentElement.open ? &amp;#039;Show headers&amp;#039; : &amp;#039;Hide headers&amp;#039;&amp;quot;&amp;gt;Show headers&amp;lt;/small&amp;gt;
            &amp;lt;/summary&amp;gt;
            &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-http&amp;quot;&amp;gt;cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 &amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/details&amp;gt;         &amp;lt;pre&amp;gt;

&amp;lt;code class=&amp;quot;language-json&amp;quot; style=&amp;quot;max-height: 300px;&amp;quot;&amp;gt;{
    &amp;amp;quot;data&amp;amp;quot;: [
        {
            &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;user&amp;amp;quot;,
            &amp;amp;quot;id&amp;amp;quot;: 1,
            &amp;amp;quot;attributes&amp;amp;quot;: {
                &amp;amp;quot;name&amp;amp;quot;: &amp;amp;quot;Jayce Effertz&amp;amp;quot;,
                &amp;amp;quot;email&amp;amp;quot;: &amp;amp;quot;elijah.miller@example.com&amp;amp;quot;,
                &amp;amp;quot;isManager&amp;amp;quot;: false,
                &amp;amp;quot;email_verified_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;,
                &amp;amp;quot;created_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;,
                &amp;amp;quot;updated_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;
            },
            &amp;amp;quot;links&amp;amp;quot;: {
                &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors/1&amp;amp;quot;
            }
        },
        {
            &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;user&amp;amp;quot;,
            &amp;amp;quot;id&amp;amp;quot;: 2,
            &amp;amp;quot;attributes&amp;amp;quot;: {
                &amp;amp;quot;name&amp;amp;quot;: &amp;amp;quot;Philip Schmeler&amp;amp;quot;,
                &amp;amp;quot;email&amp;amp;quot;: &amp;amp;quot;thiel.mireille@example.com&amp;amp;quot;,
                &amp;amp;quot;isManager&amp;amp;quot;: false,
                &amp;amp;quot;email_verified_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;,
                &amp;amp;quot;created_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;,
                &amp;amp;quot;updated_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;
            },
            &amp;amp;quot;links&amp;amp;quot;: {
                &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors/2&amp;amp;quot;
            }
        },
        {
            &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;user&amp;amp;quot;,
            &amp;amp;quot;id&amp;amp;quot;: 3,
            &amp;amp;quot;attributes&amp;amp;quot;: {
                &amp;amp;quot;name&amp;amp;quot;: &amp;amp;quot;Mr. Malcolm Lubowitz&amp;amp;quot;,
                &amp;amp;quot;email&amp;amp;quot;: &amp;amp;quot;eichmann.arlene@example.com&amp;amp;quot;,
                &amp;amp;quot;isManager&amp;amp;quot;: false,
                &amp;amp;quot;email_verified_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;,
                &amp;amp;quot;created_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;,
                &amp;amp;quot;updated_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;
            },
            &amp;amp;quot;links&amp;amp;quot;: {
                &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors/3&amp;amp;quot;
            }
        },
        {
            &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;user&amp;amp;quot;,
            &amp;amp;quot;id&amp;amp;quot;: 4,
            &amp;amp;quot;attributes&amp;amp;quot;: {
                &amp;amp;quot;name&amp;amp;quot;: &amp;amp;quot;Mr. Austin Heller Jr.&amp;amp;quot;,
                &amp;amp;quot;email&amp;amp;quot;: &amp;amp;quot;botsford.eileen@example.org&amp;amp;quot;,
                &amp;amp;quot;isManager&amp;amp;quot;: false,
                &amp;amp;quot;email_verified_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;,
                &amp;amp;quot;created_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;,
                &amp;amp;quot;updated_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;
            },
            &amp;amp;quot;links&amp;amp;quot;: {
                &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors/4&amp;amp;quot;
            }
        },
        {
            &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;user&amp;amp;quot;,
            &amp;amp;quot;id&amp;amp;quot;: 5,
            &amp;amp;quot;attributes&amp;amp;quot;: {
                &amp;amp;quot;name&amp;amp;quot;: &amp;amp;quot;Dr. Kristina Spencer DDS&amp;amp;quot;,
                &amp;amp;quot;email&amp;amp;quot;: &amp;amp;quot;drunolfsdottir@example.org&amp;amp;quot;,
                &amp;amp;quot;isManager&amp;amp;quot;: false,
                &amp;amp;quot;email_verified_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;,
                &amp;amp;quot;created_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;,
                &amp;amp;quot;updated_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;
            },
            &amp;amp;quot;links&amp;amp;quot;: {
                &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors/5&amp;amp;quot;
            }
        },
        {
            &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;user&amp;amp;quot;,
            &amp;amp;quot;id&amp;amp;quot;: 6,
            &amp;amp;quot;attributes&amp;amp;quot;: {
                &amp;amp;quot;name&amp;amp;quot;: &amp;amp;quot;Dr. Diamond Sporer&amp;amp;quot;,
                &amp;amp;quot;email&amp;amp;quot;: &amp;amp;quot;madyson.brakus@example.com&amp;amp;quot;,
                &amp;amp;quot;isManager&amp;amp;quot;: false,
                &amp;amp;quot;email_verified_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;,
                &amp;amp;quot;created_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;,
                &amp;amp;quot;updated_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;
            },
            &amp;amp;quot;links&amp;amp;quot;: {
                &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors/6&amp;amp;quot;
            }
        },
        {
            &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;user&amp;amp;quot;,
            &amp;amp;quot;id&amp;amp;quot;: 7,
            &amp;amp;quot;attributes&amp;amp;quot;: {
                &amp;amp;quot;name&amp;amp;quot;: &amp;amp;quot;Kathlyn Smith&amp;amp;quot;,
                &amp;amp;quot;email&amp;amp;quot;: &amp;amp;quot;kschaden@example.com&amp;amp;quot;,
                &amp;amp;quot;isManager&amp;amp;quot;: false,
                &amp;amp;quot;email_verified_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;,
                &amp;amp;quot;created_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;,
                &amp;amp;quot;updated_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;
            },
            &amp;amp;quot;links&amp;amp;quot;: {
                &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors/7&amp;amp;quot;
            }
        },
        {
            &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;user&amp;amp;quot;,
            &amp;amp;quot;id&amp;amp;quot;: 8,
            &amp;amp;quot;attributes&amp;amp;quot;: {
                &amp;amp;quot;name&amp;amp;quot;: &amp;amp;quot;Irving Rowe&amp;amp;quot;,
                &amp;amp;quot;email&amp;amp;quot;: &amp;amp;quot;aheidenreich@example.net&amp;amp;quot;,
                &amp;amp;quot;isManager&amp;amp;quot;: false,
                &amp;amp;quot;email_verified_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;,
                &amp;amp;quot;created_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;,
                &amp;amp;quot;updated_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;
            },
            &amp;amp;quot;links&amp;amp;quot;: {
                &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors/8&amp;amp;quot;
            }
        },
        {
            &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;user&amp;amp;quot;,
            &amp;amp;quot;id&amp;amp;quot;: 9,
            &amp;amp;quot;attributes&amp;amp;quot;: {
                &amp;amp;quot;name&amp;amp;quot;: &amp;amp;quot;Creola Lubowitz&amp;amp;quot;,
                &amp;amp;quot;email&amp;amp;quot;: &amp;amp;quot;runolfsdottir.rosina@example.org&amp;amp;quot;,
                &amp;amp;quot;isManager&amp;amp;quot;: false,
                &amp;amp;quot;email_verified_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;,
                &amp;amp;quot;created_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;,
                &amp;amp;quot;updated_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;
            },
            &amp;amp;quot;links&amp;amp;quot;: {
                &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors/9&amp;amp;quot;
            }
        },
        {
            &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;user&amp;amp;quot;,
            &amp;amp;quot;id&amp;amp;quot;: 10,
            &amp;amp;quot;attributes&amp;amp;quot;: {
                &amp;amp;quot;name&amp;amp;quot;: &amp;amp;quot;Alejandra Ebert&amp;amp;quot;,
                &amp;amp;quot;email&amp;amp;quot;: &amp;amp;quot;bwillms@example.com&amp;amp;quot;,
                &amp;amp;quot;isManager&amp;amp;quot;: false,
                &amp;amp;quot;email_verified_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;,
                &amp;amp;quot;created_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;,
                &amp;amp;quot;updated_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;
            },
            &amp;amp;quot;links&amp;amp;quot;: {
                &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors/10&amp;amp;quot;
            }
        }
    ],
    &amp;amp;quot;links&amp;amp;quot;: {
        &amp;amp;quot;first&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors?page=1&amp;amp;quot;,
        &amp;amp;quot;last&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors?page=7&amp;amp;quot;,
        &amp;amp;quot;prev&amp;amp;quot;: null,
        &amp;amp;quot;next&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors?page=2&amp;amp;quot;
    },
    &amp;amp;quot;meta&amp;amp;quot;: {
        &amp;amp;quot;current_page&amp;amp;quot;: 1,
        &amp;amp;quot;from&amp;amp;quot;: 1,
        &amp;amp;quot;last_page&amp;amp;quot;: 7,
        &amp;amp;quot;links&amp;amp;quot;: [
            {
                &amp;amp;quot;url&amp;amp;quot;: null,
                &amp;amp;quot;label&amp;amp;quot;: &amp;amp;quot;&amp;amp;amp;laquo; Previous&amp;amp;quot;,
                &amp;amp;quot;active&amp;amp;quot;: false
            },
            {
                &amp;amp;quot;url&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors?page=1&amp;amp;quot;,
                &amp;amp;quot;label&amp;amp;quot;: &amp;amp;quot;1&amp;amp;quot;,
                &amp;amp;quot;active&amp;amp;quot;: true
            },
            {
                &amp;amp;quot;url&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors?page=2&amp;amp;quot;,
                &amp;amp;quot;label&amp;amp;quot;: &amp;amp;quot;2&amp;amp;quot;,
                &amp;amp;quot;active&amp;amp;quot;: false
            },
            {
                &amp;amp;quot;url&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors?page=3&amp;amp;quot;,
                &amp;amp;quot;label&amp;amp;quot;: &amp;amp;quot;3&amp;amp;quot;,
                &amp;amp;quot;active&amp;amp;quot;: false
            },
            {
                &amp;amp;quot;url&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors?page=4&amp;amp;quot;,
                &amp;amp;quot;label&amp;amp;quot;: &amp;amp;quot;4&amp;amp;quot;,
                &amp;amp;quot;active&amp;amp;quot;: false
            },
            {
                &amp;amp;quot;url&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors?page=5&amp;amp;quot;,
                &amp;amp;quot;label&amp;amp;quot;: &amp;amp;quot;5&amp;amp;quot;,
                &amp;amp;quot;active&amp;amp;quot;: false
            },
            {
                &amp;amp;quot;url&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors?page=6&amp;amp;quot;,
                &amp;amp;quot;label&amp;amp;quot;: &amp;amp;quot;6&amp;amp;quot;,
                &amp;amp;quot;active&amp;amp;quot;: false
            },
            {
                &amp;amp;quot;url&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors?page=7&amp;amp;quot;,
                &amp;amp;quot;label&amp;amp;quot;: &amp;amp;quot;7&amp;amp;quot;,
                &amp;amp;quot;active&amp;amp;quot;: false
            },
            {
                &amp;amp;quot;url&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors?page=2&amp;amp;quot;,
                &amp;amp;quot;label&amp;amp;quot;: &amp;amp;quot;Next &amp;amp;amp;raquo;&amp;amp;quot;,
                &amp;amp;quot;active&amp;amp;quot;: false
            }
        ],
        &amp;amp;quot;path&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors&amp;amp;quot;,
        &amp;amp;quot;per_page&amp;amp;quot;: 15,
        &amp;amp;quot;to&amp;amp;quot;: 10,
        &amp;amp;quot;total&amp;amp;quot;: 101
    }
}&amp;lt;/code&amp;gt;
 &amp;lt;/pre&amp;gt;
    &amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-results-GETapi-v1-authors&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Received response&amp;lt;span
                id=&amp;quot;execution-response-status-GETapi-v1-authors&amp;quot;&amp;gt;&amp;lt;/span&amp;gt;:
    &amp;lt;/blockquote&amp;gt;
    &amp;lt;pre class=&amp;quot;json&amp;quot;&amp;gt;&amp;lt;code id=&amp;quot;execution-response-content-GETapi-v1-authors&amp;quot;
      data-empty-response-text=&amp;quot;&amp;lt;Empty response&amp;gt;&amp;quot; style=&amp;quot;max-height: 400px;&amp;quot;&amp;gt;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-error-GETapi-v1-authors&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Request failed with error:&amp;lt;/blockquote&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code id=&amp;quot;execution-error-message-GETapi-v1-authors&amp;quot;&amp;gt;

Tip: Check that you&amp;amp;#039;re properly connected to the network.
If you&amp;amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;form id=&amp;quot;form-GETapi-v1-authors&amp;quot; data-method=&amp;quot;GET&amp;quot;
      data-path=&amp;quot;api/v1/authors&amp;quot;
      data-authed=&amp;quot;1&amp;quot;
      data-hasfiles=&amp;quot;0&amp;quot;
      data-isarraybody=&amp;quot;0&amp;quot;
      autocomplete=&amp;quot;off&amp;quot;
      onsubmit=&amp;quot;event.preventDefault(); executeTryOut(&amp;#039;GETapi-v1-authors&amp;#039;, this);&amp;quot;&amp;gt;
    &amp;lt;h3&amp;gt;
        Request&amp;amp;nbsp;&amp;amp;nbsp;&amp;amp;nbsp;
                    &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-tryout-GETapi-v1-authors&amp;quot;
                    onclick=&amp;quot;tryItOut(&amp;#039;GETapi-v1-authors&amp;#039;);&amp;quot;&amp;gt;Try it out ⚡
            &amp;lt;/button&amp;gt;
            &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-canceltryout-GETapi-v1-authors&amp;quot;
                    onclick=&amp;quot;cancelTryOut(&amp;#039;GETapi-v1-authors&amp;#039;);&amp;quot; hidden&amp;gt;Cancel 🛑
            &amp;lt;/button&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
            &amp;lt;button type=&amp;quot;submit&amp;quot;
                    style=&amp;quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-executetryout-GETapi-v1-authors&amp;quot;
                    data-initial-text=&amp;quot;Send Request 💥&amp;quot;
                    data-loading-text=&amp;quot;⏱ Sending...&amp;quot;
                    hidden&amp;gt;Send Request 💥
            &amp;lt;/button&amp;gt;
            &amp;lt;/h3&amp;gt;
            &amp;lt;p&amp;gt;
            &amp;lt;small class=&amp;quot;badge badge-green&amp;quot;&amp;gt;GET&amp;lt;/small&amp;gt;
            &amp;lt;b&amp;gt;&amp;lt;code&amp;gt;api/v1/authors&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;
        &amp;lt;/p&amp;gt;
                &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;Headers&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Authorization&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Authorization&amp;quot; class=&amp;quot;auth-value&amp;quot;               data-endpoint=&amp;quot;GETapi-v1-authors&amp;quot;
               value=&amp;quot;Bearer {YOUR_AUTH_KEY}&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;Bearer {YOUR_AUTH_KEY}&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Content-Type&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Content-Type&amp;quot;                data-endpoint=&amp;quot;GETapi-v1-authors&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Accept&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Accept&amp;quot;                data-endpoint=&amp;quot;GETapi-v1-authors&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                        &amp;lt;/form&amp;gt;

                    &amp;lt;h2 id=&amp;quot;endpoints-GETapi-v1-authors--id-&amp;quot;&amp;gt;Display the specified resource.&amp;lt;/h2&amp;gt;

&amp;lt;p&amp;gt;
&amp;lt;small class=&amp;quot;badge badge-darkred&amp;quot;&amp;gt;requires authentication&amp;lt;/small&amp;gt;
&amp;lt;/p&amp;gt;



&amp;lt;span id=&amp;quot;example-requests-GETapi-v1-authors--id-&amp;quot;&amp;gt;
&amp;lt;blockquote&amp;gt;Example request:&amp;lt;/blockquote&amp;gt;


&amp;lt;div class=&amp;quot;bash-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-bash&amp;quot;&amp;gt;curl --request GET \
    --get &amp;quot;http://tickets-api.test/api/v1/authors/1&amp;quot; \
    --header &amp;quot;Authorization: Bearer {YOUR_AUTH_KEY}&amp;quot; \
    --header &amp;quot;Content-Type: application/json&amp;quot; \
    --header &amp;quot;Accept: application/json&amp;quot;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;


&amp;lt;div class=&amp;quot;javascript-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-javascript&amp;quot;&amp;gt;const url = new URL(
    &amp;quot;http://tickets-api.test/api/v1/authors/1&amp;quot;
);

const headers = {
    &amp;quot;Authorization&amp;quot;: &amp;quot;Bearer {YOUR_AUTH_KEY}&amp;quot;,
    &amp;quot;Content-Type&amp;quot;: &amp;quot;application/json&amp;quot;,
    &amp;quot;Accept&amp;quot;: &amp;quot;application/json&amp;quot;,
};

fetch(url, {
    method: &amp;quot;GET&amp;quot;,
    headers,
}).then(response =&amp;amp;gt; response.json());&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;

&amp;lt;/span&amp;gt;

&amp;lt;span id=&amp;quot;example-responses-GETapi-v1-authors--id-&amp;quot;&amp;gt;
            &amp;lt;blockquote&amp;gt;
            &amp;lt;p&amp;gt;Example response (200):&amp;lt;/p&amp;gt;
        &amp;lt;/blockquote&amp;gt;
                &amp;lt;details class=&amp;quot;annotation&amp;quot;&amp;gt;
            &amp;lt;summary style=&amp;quot;cursor: pointer;&amp;quot;&amp;gt;
                &amp;lt;small onclick=&amp;quot;textContent = parentElement.parentElement.open ? &amp;#039;Show headers&amp;#039; : &amp;#039;Hide headers&amp;#039;&amp;quot;&amp;gt;Show headers&amp;lt;/small&amp;gt;
            &amp;lt;/summary&amp;gt;
            &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-http&amp;quot;&amp;gt;cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 &amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/details&amp;gt;         &amp;lt;pre&amp;gt;

&amp;lt;code class=&amp;quot;language-json&amp;quot; style=&amp;quot;max-height: 300px;&amp;quot;&amp;gt;{
    &amp;amp;quot;data&amp;amp;quot;: {
        &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;user&amp;amp;quot;,
        &amp;amp;quot;id&amp;amp;quot;: 1,
        &amp;amp;quot;attributes&amp;amp;quot;: {
            &amp;amp;quot;name&amp;amp;quot;: &amp;amp;quot;Jayce Effertz&amp;amp;quot;,
            &amp;amp;quot;email&amp;amp;quot;: &amp;amp;quot;elijah.miller@example.com&amp;amp;quot;,
            &amp;amp;quot;isManager&amp;amp;quot;: false,
            &amp;amp;quot;email_verified_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;,
            &amp;amp;quot;created_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;,
            &amp;amp;quot;updated_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;
        },
        &amp;amp;quot;links&amp;amp;quot;: {
            &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors/1&amp;amp;quot;
        }
    }
}&amp;lt;/code&amp;gt;
 &amp;lt;/pre&amp;gt;
    &amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-results-GETapi-v1-authors--id-&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Received response&amp;lt;span
                id=&amp;quot;execution-response-status-GETapi-v1-authors--id-&amp;quot;&amp;gt;&amp;lt;/span&amp;gt;:
    &amp;lt;/blockquote&amp;gt;
    &amp;lt;pre class=&amp;quot;json&amp;quot;&amp;gt;&amp;lt;code id=&amp;quot;execution-response-content-GETapi-v1-authors--id-&amp;quot;
      data-empty-response-text=&amp;quot;&amp;lt;Empty response&amp;gt;&amp;quot; style=&amp;quot;max-height: 400px;&amp;quot;&amp;gt;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-error-GETapi-v1-authors--id-&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Request failed with error:&amp;lt;/blockquote&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code id=&amp;quot;execution-error-message-GETapi-v1-authors--id-&amp;quot;&amp;gt;

Tip: Check that you&amp;amp;#039;re properly connected to the network.
If you&amp;amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;form id=&amp;quot;form-GETapi-v1-authors--id-&amp;quot; data-method=&amp;quot;GET&amp;quot;
      data-path=&amp;quot;api/v1/authors/{id}&amp;quot;
      data-authed=&amp;quot;1&amp;quot;
      data-hasfiles=&amp;quot;0&amp;quot;
      data-isarraybody=&amp;quot;0&amp;quot;
      autocomplete=&amp;quot;off&amp;quot;
      onsubmit=&amp;quot;event.preventDefault(); executeTryOut(&amp;#039;GETapi-v1-authors--id-&amp;#039;, this);&amp;quot;&amp;gt;
    &amp;lt;h3&amp;gt;
        Request&amp;amp;nbsp;&amp;amp;nbsp;&amp;amp;nbsp;
                    &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-tryout-GETapi-v1-authors--id-&amp;quot;
                    onclick=&amp;quot;tryItOut(&amp;#039;GETapi-v1-authors--id-&amp;#039;);&amp;quot;&amp;gt;Try it out ⚡
            &amp;lt;/button&amp;gt;
            &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-canceltryout-GETapi-v1-authors--id-&amp;quot;
                    onclick=&amp;quot;cancelTryOut(&amp;#039;GETapi-v1-authors--id-&amp;#039;);&amp;quot; hidden&amp;gt;Cancel 🛑
            &amp;lt;/button&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
            &amp;lt;button type=&amp;quot;submit&amp;quot;
                    style=&amp;quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-executetryout-GETapi-v1-authors--id-&amp;quot;
                    data-initial-text=&amp;quot;Send Request 💥&amp;quot;
                    data-loading-text=&amp;quot;⏱ Sending...&amp;quot;
                    hidden&amp;gt;Send Request 💥
            &amp;lt;/button&amp;gt;
            &amp;lt;/h3&amp;gt;
            &amp;lt;p&amp;gt;
            &amp;lt;small class=&amp;quot;badge badge-green&amp;quot;&amp;gt;GET&amp;lt;/small&amp;gt;
            &amp;lt;b&amp;gt;&amp;lt;code&amp;gt;api/v1/authors/{id}&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;
        &amp;lt;/p&amp;gt;
                &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;Headers&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Authorization&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Authorization&amp;quot; class=&amp;quot;auth-value&amp;quot;               data-endpoint=&amp;quot;GETapi-v1-authors--id-&amp;quot;
               value=&amp;quot;Bearer {YOUR_AUTH_KEY}&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;Bearer {YOUR_AUTH_KEY}&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Content-Type&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Content-Type&amp;quot;                data-endpoint=&amp;quot;GETapi-v1-authors--id-&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Accept&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Accept&amp;quot;                data-endpoint=&amp;quot;GETapi-v1-authors--id-&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                        &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;URL Parameters&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                    &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;id&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;integer&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;number&amp;quot; style=&amp;quot;display: none&amp;quot;
               step=&amp;quot;any&amp;quot;               name=&amp;quot;id&amp;quot;                data-endpoint=&amp;quot;GETapi-v1-authors--id-&amp;quot;
               value=&amp;quot;1&amp;quot;
               data-component=&amp;quot;url&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;The ID of the author. Example: &amp;lt;code&amp;gt;1&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                    &amp;lt;/form&amp;gt;

                    &amp;lt;h2 id=&amp;quot;endpoints-DELETEapi-v1-authors--id-&amp;quot;&amp;gt;Remove the specified resource from storage.&amp;lt;/h2&amp;gt;

&amp;lt;p&amp;gt;
&amp;lt;small class=&amp;quot;badge badge-darkred&amp;quot;&amp;gt;requires authentication&amp;lt;/small&amp;gt;
&amp;lt;/p&amp;gt;



&amp;lt;span id=&amp;quot;example-requests-DELETEapi-v1-authors--id-&amp;quot;&amp;gt;
&amp;lt;blockquote&amp;gt;Example request:&amp;lt;/blockquote&amp;gt;


&amp;lt;div class=&amp;quot;bash-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-bash&amp;quot;&amp;gt;curl --request DELETE \
    &amp;quot;http://tickets-api.test/api/v1/authors/1&amp;quot; \
    --header &amp;quot;Authorization: Bearer {YOUR_AUTH_KEY}&amp;quot; \
    --header &amp;quot;Content-Type: application/json&amp;quot; \
    --header &amp;quot;Accept: application/json&amp;quot;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;


&amp;lt;div class=&amp;quot;javascript-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-javascript&amp;quot;&amp;gt;const url = new URL(
    &amp;quot;http://tickets-api.test/api/v1/authors/1&amp;quot;
);

const headers = {
    &amp;quot;Authorization&amp;quot;: &amp;quot;Bearer {YOUR_AUTH_KEY}&amp;quot;,
    &amp;quot;Content-Type&amp;quot;: &amp;quot;application/json&amp;quot;,
    &amp;quot;Accept&amp;quot;: &amp;quot;application/json&amp;quot;,
};

fetch(url, {
    method: &amp;quot;DELETE&amp;quot;,
    headers,
}).then(response =&amp;amp;gt; response.json());&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;

&amp;lt;/span&amp;gt;

&amp;lt;span id=&amp;quot;example-responses-DELETEapi-v1-authors--id-&amp;quot;&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-results-DELETEapi-v1-authors--id-&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Received response&amp;lt;span
                id=&amp;quot;execution-response-status-DELETEapi-v1-authors--id-&amp;quot;&amp;gt;&amp;lt;/span&amp;gt;:
    &amp;lt;/blockquote&amp;gt;
    &amp;lt;pre class=&amp;quot;json&amp;quot;&amp;gt;&amp;lt;code id=&amp;quot;execution-response-content-DELETEapi-v1-authors--id-&amp;quot;
      data-empty-response-text=&amp;quot;&amp;lt;Empty response&amp;gt;&amp;quot; style=&amp;quot;max-height: 400px;&amp;quot;&amp;gt;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-error-DELETEapi-v1-authors--id-&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Request failed with error:&amp;lt;/blockquote&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code id=&amp;quot;execution-error-message-DELETEapi-v1-authors--id-&amp;quot;&amp;gt;

Tip: Check that you&amp;amp;#039;re properly connected to the network.
If you&amp;amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;form id=&amp;quot;form-DELETEapi-v1-authors--id-&amp;quot; data-method=&amp;quot;DELETE&amp;quot;
      data-path=&amp;quot;api/v1/authors/{id}&amp;quot;
      data-authed=&amp;quot;1&amp;quot;
      data-hasfiles=&amp;quot;0&amp;quot;
      data-isarraybody=&amp;quot;0&amp;quot;
      autocomplete=&amp;quot;off&amp;quot;
      onsubmit=&amp;quot;event.preventDefault(); executeTryOut(&amp;#039;DELETEapi-v1-authors--id-&amp;#039;, this);&amp;quot;&amp;gt;
    &amp;lt;h3&amp;gt;
        Request&amp;amp;nbsp;&amp;amp;nbsp;&amp;amp;nbsp;
                    &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-tryout-DELETEapi-v1-authors--id-&amp;quot;
                    onclick=&amp;quot;tryItOut(&amp;#039;DELETEapi-v1-authors--id-&amp;#039;);&amp;quot;&amp;gt;Try it out ⚡
            &amp;lt;/button&amp;gt;
            &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-canceltryout-DELETEapi-v1-authors--id-&amp;quot;
                    onclick=&amp;quot;cancelTryOut(&amp;#039;DELETEapi-v1-authors--id-&amp;#039;);&amp;quot; hidden&amp;gt;Cancel 🛑
            &amp;lt;/button&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
            &amp;lt;button type=&amp;quot;submit&amp;quot;
                    style=&amp;quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-executetryout-DELETEapi-v1-authors--id-&amp;quot;
                    data-initial-text=&amp;quot;Send Request 💥&amp;quot;
                    data-loading-text=&amp;quot;⏱ Sending...&amp;quot;
                    hidden&amp;gt;Send Request 💥
            &amp;lt;/button&amp;gt;
            &amp;lt;/h3&amp;gt;
            &amp;lt;p&amp;gt;
            &amp;lt;small class=&amp;quot;badge badge-red&amp;quot;&amp;gt;DELETE&amp;lt;/small&amp;gt;
            &amp;lt;b&amp;gt;&amp;lt;code&amp;gt;api/v1/authors/{id}&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;
        &amp;lt;/p&amp;gt;
                &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;Headers&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Authorization&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Authorization&amp;quot; class=&amp;quot;auth-value&amp;quot;               data-endpoint=&amp;quot;DELETEapi-v1-authors--id-&amp;quot;
               value=&amp;quot;Bearer {YOUR_AUTH_KEY}&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;Bearer {YOUR_AUTH_KEY}&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Content-Type&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Content-Type&amp;quot;                data-endpoint=&amp;quot;DELETEapi-v1-authors--id-&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Accept&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Accept&amp;quot;                data-endpoint=&amp;quot;DELETEapi-v1-authors--id-&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                        &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;URL Parameters&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                    &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;id&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;integer&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;number&amp;quot; style=&amp;quot;display: none&amp;quot;
               step=&amp;quot;any&amp;quot;               name=&amp;quot;id&amp;quot;                data-endpoint=&amp;quot;DELETEapi-v1-authors--id-&amp;quot;
               value=&amp;quot;1&amp;quot;
               data-component=&amp;quot;url&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;The ID of the author. Example: &amp;lt;code&amp;gt;1&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                    &amp;lt;/form&amp;gt;

                    &amp;lt;h2 id=&amp;quot;endpoints-GETapi-v1-authors--author_id--tickets&amp;quot;&amp;gt;GET api/v1/authors/{author_id}/tickets&amp;lt;/h2&amp;gt;

&amp;lt;p&amp;gt;
&amp;lt;small class=&amp;quot;badge badge-darkred&amp;quot;&amp;gt;requires authentication&amp;lt;/small&amp;gt;
&amp;lt;/p&amp;gt;



&amp;lt;span id=&amp;quot;example-requests-GETapi-v1-authors--author_id--tickets&amp;quot;&amp;gt;
&amp;lt;blockquote&amp;gt;Example request:&amp;lt;/blockquote&amp;gt;


&amp;lt;div class=&amp;quot;bash-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-bash&amp;quot;&amp;gt;curl --request GET \
    --get &amp;quot;http://tickets-api.test/api/v1/authors/1/tickets&amp;quot; \
    --header &amp;quot;Authorization: Bearer {YOUR_AUTH_KEY}&amp;quot; \
    --header &amp;quot;Content-Type: application/json&amp;quot; \
    --header &amp;quot;Accept: application/json&amp;quot;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;


&amp;lt;div class=&amp;quot;javascript-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-javascript&amp;quot;&amp;gt;const url = new URL(
    &amp;quot;http://tickets-api.test/api/v1/authors/1/tickets&amp;quot;
);

const headers = {
    &amp;quot;Authorization&amp;quot;: &amp;quot;Bearer {YOUR_AUTH_KEY}&amp;quot;,
    &amp;quot;Content-Type&amp;quot;: &amp;quot;application/json&amp;quot;,
    &amp;quot;Accept&amp;quot;: &amp;quot;application/json&amp;quot;,
};

fetch(url, {
    method: &amp;quot;GET&amp;quot;,
    headers,
}).then(response =&amp;amp;gt; response.json());&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;

&amp;lt;/span&amp;gt;

&amp;lt;span id=&amp;quot;example-responses-GETapi-v1-authors--author_id--tickets&amp;quot;&amp;gt;
            &amp;lt;blockquote&amp;gt;
            &amp;lt;p&amp;gt;Example response (200):&amp;lt;/p&amp;gt;
        &amp;lt;/blockquote&amp;gt;
                &amp;lt;details class=&amp;quot;annotation&amp;quot;&amp;gt;
            &amp;lt;summary style=&amp;quot;cursor: pointer;&amp;quot;&amp;gt;
                &amp;lt;small onclick=&amp;quot;textContent = parentElement.parentElement.open ? &amp;#039;Show headers&amp;#039; : &amp;#039;Hide headers&amp;#039;&amp;quot;&amp;gt;Show headers&amp;lt;/small&amp;gt;
            &amp;lt;/summary&amp;gt;
            &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-http&amp;quot;&amp;gt;cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 &amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/details&amp;gt;         &amp;lt;pre&amp;gt;

&amp;lt;code class=&amp;quot;language-json&amp;quot; style=&amp;quot;max-height: 300px;&amp;quot;&amp;gt;{
    &amp;amp;quot;data&amp;amp;quot;: [
        {
            &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;ticket&amp;amp;quot;,
            &amp;amp;quot;id&amp;amp;quot;: 30,
            &amp;amp;quot;attributes&amp;amp;quot;: {
                &amp;amp;quot;title&amp;amp;quot;: &amp;amp;quot;Changed title 29 may&amp;amp;quot;,
                &amp;amp;quot;status&amp;amp;quot;: &amp;amp;quot;C&amp;amp;quot;,
                &amp;amp;quot;created_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;,
                &amp;amp;quot;updated_at&amp;amp;quot;: &amp;amp;quot;2024-05-29T22:51:29.000000Z&amp;amp;quot;
            },
            &amp;amp;quot;relationships&amp;amp;quot;: {
                &amp;amp;quot;author&amp;amp;quot;: {
                    &amp;amp;quot;data&amp;amp;quot;: {
                        &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;user&amp;amp;quot;,
                        &amp;amp;quot;id&amp;amp;quot;: 1
                    },
                    &amp;amp;quot;links&amp;amp;quot;: {
                        &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors/1&amp;amp;quot;
                    }
                }
            },
            &amp;amp;quot;links&amp;amp;quot;: {
                &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/tickets/30&amp;amp;quot;
            }
        },
        {
            &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;ticket&amp;amp;quot;,
            &amp;amp;quot;id&amp;amp;quot;: 35,
            &amp;amp;quot;attributes&amp;amp;quot;: {
                &amp;amp;quot;title&amp;amp;quot;: &amp;amp;quot;doloremque ipsa officiis&amp;amp;quot;,
                &amp;amp;quot;status&amp;amp;quot;: &amp;amp;quot;X&amp;amp;quot;,
                &amp;amp;quot;created_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;,
                &amp;amp;quot;updated_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;
            },
            &amp;amp;quot;relationships&amp;amp;quot;: {
                &amp;amp;quot;author&amp;amp;quot;: {
                    &amp;amp;quot;data&amp;amp;quot;: {
                        &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;user&amp;amp;quot;,
                        &amp;amp;quot;id&amp;amp;quot;: 1
                    },
                    &amp;amp;quot;links&amp;amp;quot;: {
                        &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors/1&amp;amp;quot;
                    }
                }
            },
            &amp;amp;quot;links&amp;amp;quot;: {
                &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/tickets/35&amp;amp;quot;
            }
        },
        {
            &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;ticket&amp;amp;quot;,
            &amp;amp;quot;id&amp;amp;quot;: 44,
            &amp;amp;quot;attributes&amp;amp;quot;: {
                &amp;amp;quot;title&amp;amp;quot;: &amp;amp;quot;saepe possimus id&amp;amp;quot;,
                &amp;amp;quot;status&amp;amp;quot;: &amp;amp;quot;H&amp;amp;quot;,
                &amp;amp;quot;created_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;,
                &amp;amp;quot;updated_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;
            },
            &amp;amp;quot;relationships&amp;amp;quot;: {
                &amp;amp;quot;author&amp;amp;quot;: {
                    &amp;amp;quot;data&amp;amp;quot;: {
                        &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;user&amp;amp;quot;,
                        &amp;amp;quot;id&amp;amp;quot;: 1
                    },
                    &amp;amp;quot;links&amp;amp;quot;: {
                        &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors/1&amp;amp;quot;
                    }
                }
            },
            &amp;amp;quot;links&amp;amp;quot;: {
                &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/tickets/44&amp;amp;quot;
            }
        },
        {
            &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;ticket&amp;amp;quot;,
            &amp;amp;quot;id&amp;amp;quot;: 46,
            &amp;amp;quot;attributes&amp;amp;quot;: {
                &amp;amp;quot;title&amp;amp;quot;: &amp;amp;quot;dolores occaecati officia&amp;amp;quot;,
                &amp;amp;quot;status&amp;amp;quot;: &amp;amp;quot;A&amp;amp;quot;,
                &amp;amp;quot;created_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;,
                &amp;amp;quot;updated_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;
            },
            &amp;amp;quot;relationships&amp;amp;quot;: {
                &amp;amp;quot;author&amp;amp;quot;: {
                    &amp;amp;quot;data&amp;amp;quot;: {
                        &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;user&amp;amp;quot;,
                        &amp;amp;quot;id&amp;amp;quot;: 1
                    },
                    &amp;amp;quot;links&amp;amp;quot;: {
                        &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors/1&amp;amp;quot;
                    }
                }
            },
            &amp;amp;quot;links&amp;amp;quot;: {
                &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/tickets/46&amp;amp;quot;
            }
        },
        {
            &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;ticket&amp;amp;quot;,
            &amp;amp;quot;id&amp;amp;quot;: 48,
            &amp;amp;quot;attributes&amp;amp;quot;: {
                &amp;amp;quot;title&amp;amp;quot;: &amp;amp;quot;neque error quia&amp;amp;quot;,
                &amp;amp;quot;status&amp;amp;quot;: &amp;amp;quot;A&amp;amp;quot;,
                &amp;amp;quot;created_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;,
                &amp;amp;quot;updated_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;
            },
            &amp;amp;quot;relationships&amp;amp;quot;: {
                &amp;amp;quot;author&amp;amp;quot;: {
                    &amp;amp;quot;data&amp;amp;quot;: {
                        &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;user&amp;amp;quot;,
                        &amp;amp;quot;id&amp;amp;quot;: 1
                    },
                    &amp;amp;quot;links&amp;amp;quot;: {
                        &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors/1&amp;amp;quot;
                    }
                }
            },
            &amp;amp;quot;links&amp;amp;quot;: {
                &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/tickets/48&amp;amp;quot;
            }
        },
        {
            &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;ticket&amp;amp;quot;,
            &amp;amp;quot;id&amp;amp;quot;: 49,
            &amp;amp;quot;attributes&amp;amp;quot;: {
                &amp;amp;quot;title&amp;amp;quot;: &amp;amp;quot;totam illum nihil&amp;amp;quot;,
                &amp;amp;quot;status&amp;amp;quot;: &amp;amp;quot;H&amp;amp;quot;,
                &amp;amp;quot;created_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;,
                &amp;amp;quot;updated_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;
            },
            &amp;amp;quot;relationships&amp;amp;quot;: {
                &amp;amp;quot;author&amp;amp;quot;: {
                    &amp;amp;quot;data&amp;amp;quot;: {
                        &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;user&amp;amp;quot;,
                        &amp;amp;quot;id&amp;amp;quot;: 1
                    },
                    &amp;amp;quot;links&amp;amp;quot;: {
                        &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors/1&amp;amp;quot;
                    }
                }
            },
            &amp;amp;quot;links&amp;amp;quot;: {
                &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/tickets/49&amp;amp;quot;
            }
        },
        {
            &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;ticket&amp;amp;quot;,
            &amp;amp;quot;id&amp;amp;quot;: 50,
            &amp;amp;quot;attributes&amp;amp;quot;: {
                &amp;amp;quot;title&amp;amp;quot;: &amp;amp;quot;perferendis placeat quia&amp;amp;quot;,
                &amp;amp;quot;status&amp;amp;quot;: &amp;amp;quot;X&amp;amp;quot;,
                &amp;amp;quot;created_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;,
                &amp;amp;quot;updated_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;
            },
            &amp;amp;quot;relationships&amp;amp;quot;: {
                &amp;amp;quot;author&amp;amp;quot;: {
                    &amp;amp;quot;data&amp;amp;quot;: {
                        &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;user&amp;amp;quot;,
                        &amp;amp;quot;id&amp;amp;quot;: 1
                    },
                    &amp;amp;quot;links&amp;amp;quot;: {
                        &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors/1&amp;amp;quot;
                    }
                }
            },
            &amp;amp;quot;links&amp;amp;quot;: {
                &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/tickets/50&amp;amp;quot;
            }
        },
        {
            &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;ticket&amp;amp;quot;,
            &amp;amp;quot;id&amp;amp;quot;: 52,
            &amp;amp;quot;attributes&amp;amp;quot;: {
                &amp;amp;quot;title&amp;amp;quot;: &amp;amp;quot;ea earum est&amp;amp;quot;,
                &amp;amp;quot;status&amp;amp;quot;: &amp;amp;quot;X&amp;amp;quot;,
                &amp;amp;quot;created_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;,
                &amp;amp;quot;updated_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;
            },
            &amp;amp;quot;relationships&amp;amp;quot;: {
                &amp;amp;quot;author&amp;amp;quot;: {
                    &amp;amp;quot;data&amp;amp;quot;: {
                        &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;user&amp;amp;quot;,
                        &amp;amp;quot;id&amp;amp;quot;: 1
                    },
                    &amp;amp;quot;links&amp;amp;quot;: {
                        &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors/1&amp;amp;quot;
                    }
                }
            },
            &amp;amp;quot;links&amp;amp;quot;: {
                &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/tickets/52&amp;amp;quot;
            }
        },
        {
            &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;ticket&amp;amp;quot;,
            &amp;amp;quot;id&amp;amp;quot;: 53,
            &amp;amp;quot;attributes&amp;amp;quot;: {
                &amp;amp;quot;title&amp;amp;quot;: &amp;amp;quot;blanditiis similique at&amp;amp;quot;,
                &amp;amp;quot;status&amp;amp;quot;: &amp;amp;quot;A&amp;amp;quot;,
                &amp;amp;quot;created_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;,
                &amp;amp;quot;updated_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;
            },
            &amp;amp;quot;relationships&amp;amp;quot;: {
                &amp;amp;quot;author&amp;amp;quot;: {
                    &amp;amp;quot;data&amp;amp;quot;: {
                        &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;user&amp;amp;quot;,
                        &amp;amp;quot;id&amp;amp;quot;: 1
                    },
                    &amp;amp;quot;links&amp;amp;quot;: {
                        &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors/1&amp;amp;quot;
                    }
                }
            },
            &amp;amp;quot;links&amp;amp;quot;: {
                &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/tickets/53&amp;amp;quot;
            }
        },
        {
            &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;ticket&amp;amp;quot;,
            &amp;amp;quot;id&amp;amp;quot;: 62,
            &amp;amp;quot;attributes&amp;amp;quot;: {
                &amp;amp;quot;title&amp;amp;quot;: &amp;amp;quot;non quod qui&amp;amp;quot;,
                &amp;amp;quot;status&amp;amp;quot;: &amp;amp;quot;X&amp;amp;quot;,
                &amp;amp;quot;created_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;,
                &amp;amp;quot;updated_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;
            },
            &amp;amp;quot;relationships&amp;amp;quot;: {
                &amp;amp;quot;author&amp;amp;quot;: {
                    &amp;amp;quot;data&amp;amp;quot;: {
                        &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;user&amp;amp;quot;,
                        &amp;amp;quot;id&amp;amp;quot;: 1
                    },
                    &amp;amp;quot;links&amp;amp;quot;: {
                        &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors/1&amp;amp;quot;
                    }
                }
            },
            &amp;amp;quot;links&amp;amp;quot;: {
                &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/tickets/62&amp;amp;quot;
            }
        },
        {
            &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;ticket&amp;amp;quot;,
            &amp;amp;quot;id&amp;amp;quot;: 73,
            &amp;amp;quot;attributes&amp;amp;quot;: {
                &amp;amp;quot;title&amp;amp;quot;: &amp;amp;quot;dolorem deserunt facilis&amp;amp;quot;,
                &amp;amp;quot;status&amp;amp;quot;: &amp;amp;quot;C&amp;amp;quot;,
                &amp;amp;quot;created_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;,
                &amp;amp;quot;updated_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;
            },
            &amp;amp;quot;relationships&amp;amp;quot;: {
                &amp;amp;quot;author&amp;amp;quot;: {
                    &amp;amp;quot;data&amp;amp;quot;: {
                        &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;user&amp;amp;quot;,
                        &amp;amp;quot;id&amp;amp;quot;: 1
                    },
                    &amp;amp;quot;links&amp;amp;quot;: {
                        &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors/1&amp;amp;quot;
                    }
                }
            },
            &amp;amp;quot;links&amp;amp;quot;: {
                &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/tickets/73&amp;amp;quot;
            }
        },
        {
            &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;ticket&amp;amp;quot;,
            &amp;amp;quot;id&amp;amp;quot;: 81,
            &amp;amp;quot;attributes&amp;amp;quot;: {
                &amp;amp;quot;title&amp;amp;quot;: &amp;amp;quot;nihil non provident&amp;amp;quot;,
                &amp;amp;quot;status&amp;amp;quot;: &amp;amp;quot;A&amp;amp;quot;,
                &amp;amp;quot;created_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;,
                &amp;amp;quot;updated_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;
            },
            &amp;amp;quot;relationships&amp;amp;quot;: {
                &amp;amp;quot;author&amp;amp;quot;: {
                    &amp;amp;quot;data&amp;amp;quot;: {
                        &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;user&amp;amp;quot;,
                        &amp;amp;quot;id&amp;amp;quot;: 1
                    },
                    &amp;amp;quot;links&amp;amp;quot;: {
                        &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors/1&amp;amp;quot;
                    }
                }
            },
            &amp;amp;quot;links&amp;amp;quot;: {
                &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/tickets/81&amp;amp;quot;
            }
        },
        {
            &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;ticket&amp;amp;quot;,
            &amp;amp;quot;id&amp;amp;quot;: 89,
            &amp;amp;quot;attributes&amp;amp;quot;: {
                &amp;amp;quot;title&amp;amp;quot;: &amp;amp;quot;odio dolores laborum&amp;amp;quot;,
                &amp;amp;quot;status&amp;amp;quot;: &amp;amp;quot;H&amp;amp;quot;,
                &amp;amp;quot;created_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;,
                &amp;amp;quot;updated_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;
            },
            &amp;amp;quot;relationships&amp;amp;quot;: {
                &amp;amp;quot;author&amp;amp;quot;: {
                    &amp;amp;quot;data&amp;amp;quot;: {
                        &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;user&amp;amp;quot;,
                        &amp;amp;quot;id&amp;amp;quot;: 1
                    },
                    &amp;amp;quot;links&amp;amp;quot;: {
                        &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors/1&amp;amp;quot;
                    }
                }
            },
            &amp;amp;quot;links&amp;amp;quot;: {
                &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/tickets/89&amp;amp;quot;
            }
        },
        {
            &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;ticket&amp;amp;quot;,
            &amp;amp;quot;id&amp;amp;quot;: 92,
            &amp;amp;quot;attributes&amp;amp;quot;: {
                &amp;amp;quot;title&amp;amp;quot;: &amp;amp;quot;aliquid ullam minima&amp;amp;quot;,
                &amp;amp;quot;status&amp;amp;quot;: &amp;amp;quot;A&amp;amp;quot;,
                &amp;amp;quot;created_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;,
                &amp;amp;quot;updated_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;
            },
            &amp;amp;quot;relationships&amp;amp;quot;: {
                &amp;amp;quot;author&amp;amp;quot;: {
                    &amp;amp;quot;data&amp;amp;quot;: {
                        &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;user&amp;amp;quot;,
                        &amp;amp;quot;id&amp;amp;quot;: 1
                    },
                    &amp;amp;quot;links&amp;amp;quot;: {
                        &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors/1&amp;amp;quot;
                    }
                }
            },
            &amp;amp;quot;links&amp;amp;quot;: {
                &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/tickets/92&amp;amp;quot;
            }
        },
        {
            &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;ticket&amp;amp;quot;,
            &amp;amp;quot;id&amp;amp;quot;: 97,
            &amp;amp;quot;attributes&amp;amp;quot;: {
                &amp;amp;quot;title&amp;amp;quot;: &amp;amp;quot;distinctio omnis qui&amp;amp;quot;,
                &amp;amp;quot;status&amp;amp;quot;: &amp;amp;quot;H&amp;amp;quot;,
                &amp;amp;quot;created_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;,
                &amp;amp;quot;updated_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;
            },
            &amp;amp;quot;relationships&amp;amp;quot;: {
                &amp;amp;quot;author&amp;amp;quot;: {
                    &amp;amp;quot;data&amp;amp;quot;: {
                        &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;user&amp;amp;quot;,
                        &amp;amp;quot;id&amp;amp;quot;: 1
                    },
                    &amp;amp;quot;links&amp;amp;quot;: {
                        &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors/1&amp;amp;quot;
                    }
                }
            },
            &amp;amp;quot;links&amp;amp;quot;: {
                &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/tickets/97&amp;amp;quot;
            }
        }
    ],
    &amp;amp;quot;links&amp;amp;quot;: {
        &amp;amp;quot;first&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors/1/tickets?page=1&amp;amp;quot;,
        &amp;amp;quot;last&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors/1/tickets?page=2&amp;amp;quot;,
        &amp;amp;quot;prev&amp;amp;quot;: null,
        &amp;amp;quot;next&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors/1/tickets?page=2&amp;amp;quot;
    },
    &amp;amp;quot;meta&amp;amp;quot;: {
        &amp;amp;quot;current_page&amp;amp;quot;: 1,
        &amp;amp;quot;from&amp;amp;quot;: 1,
        &amp;amp;quot;last_page&amp;amp;quot;: 2,
        &amp;amp;quot;links&amp;amp;quot;: [
            {
                &amp;amp;quot;url&amp;amp;quot;: null,
                &amp;amp;quot;label&amp;amp;quot;: &amp;amp;quot;&amp;amp;amp;laquo; Previous&amp;amp;quot;,
                &amp;amp;quot;active&amp;amp;quot;: false
            },
            {
                &amp;amp;quot;url&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors/1/tickets?page=1&amp;amp;quot;,
                &amp;amp;quot;label&amp;amp;quot;: &amp;amp;quot;1&amp;amp;quot;,
                &amp;amp;quot;active&amp;amp;quot;: true
            },
            {
                &amp;amp;quot;url&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors/1/tickets?page=2&amp;amp;quot;,
                &amp;amp;quot;label&amp;amp;quot;: &amp;amp;quot;2&amp;amp;quot;,
                &amp;amp;quot;active&amp;amp;quot;: false
            },
            {
                &amp;amp;quot;url&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors/1/tickets?page=2&amp;amp;quot;,
                &amp;amp;quot;label&amp;amp;quot;: &amp;amp;quot;Next &amp;amp;amp;raquo;&amp;amp;quot;,
                &amp;amp;quot;active&amp;amp;quot;: false
            }
        ],
        &amp;amp;quot;path&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors/1/tickets&amp;amp;quot;,
        &amp;amp;quot;per_page&amp;amp;quot;: 15,
        &amp;amp;quot;to&amp;amp;quot;: 15,
        &amp;amp;quot;total&amp;amp;quot;: 17
    }
}&amp;lt;/code&amp;gt;
 &amp;lt;/pre&amp;gt;
    &amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-results-GETapi-v1-authors--author_id--tickets&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Received response&amp;lt;span
                id=&amp;quot;execution-response-status-GETapi-v1-authors--author_id--tickets&amp;quot;&amp;gt;&amp;lt;/span&amp;gt;:
    &amp;lt;/blockquote&amp;gt;
    &amp;lt;pre class=&amp;quot;json&amp;quot;&amp;gt;&amp;lt;code id=&amp;quot;execution-response-content-GETapi-v1-authors--author_id--tickets&amp;quot;
      data-empty-response-text=&amp;quot;&amp;lt;Empty response&amp;gt;&amp;quot; style=&amp;quot;max-height: 400px;&amp;quot;&amp;gt;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-error-GETapi-v1-authors--author_id--tickets&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Request failed with error:&amp;lt;/blockquote&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code id=&amp;quot;execution-error-message-GETapi-v1-authors--author_id--tickets&amp;quot;&amp;gt;

Tip: Check that you&amp;amp;#039;re properly connected to the network.
If you&amp;amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;form id=&amp;quot;form-GETapi-v1-authors--author_id--tickets&amp;quot; data-method=&amp;quot;GET&amp;quot;
      data-path=&amp;quot;api/v1/authors/{author_id}/tickets&amp;quot;
      data-authed=&amp;quot;1&amp;quot;
      data-hasfiles=&amp;quot;0&amp;quot;
      data-isarraybody=&amp;quot;0&amp;quot;
      autocomplete=&amp;quot;off&amp;quot;
      onsubmit=&amp;quot;event.preventDefault(); executeTryOut(&amp;#039;GETapi-v1-authors--author_id--tickets&amp;#039;, this);&amp;quot;&amp;gt;
    &amp;lt;h3&amp;gt;
        Request&amp;amp;nbsp;&amp;amp;nbsp;&amp;amp;nbsp;
                    &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-tryout-GETapi-v1-authors--author_id--tickets&amp;quot;
                    onclick=&amp;quot;tryItOut(&amp;#039;GETapi-v1-authors--author_id--tickets&amp;#039;);&amp;quot;&amp;gt;Try it out ⚡
            &amp;lt;/button&amp;gt;
            &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-canceltryout-GETapi-v1-authors--author_id--tickets&amp;quot;
                    onclick=&amp;quot;cancelTryOut(&amp;#039;GETapi-v1-authors--author_id--tickets&amp;#039;);&amp;quot; hidden&amp;gt;Cancel 🛑
            &amp;lt;/button&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
            &amp;lt;button type=&amp;quot;submit&amp;quot;
                    style=&amp;quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-executetryout-GETapi-v1-authors--author_id--tickets&amp;quot;
                    data-initial-text=&amp;quot;Send Request 💥&amp;quot;
                    data-loading-text=&amp;quot;⏱ Sending...&amp;quot;
                    hidden&amp;gt;Send Request 💥
            &amp;lt;/button&amp;gt;
            &amp;lt;/h3&amp;gt;
            &amp;lt;p&amp;gt;
            &amp;lt;small class=&amp;quot;badge badge-green&amp;quot;&amp;gt;GET&amp;lt;/small&amp;gt;
            &amp;lt;b&amp;gt;&amp;lt;code&amp;gt;api/v1/authors/{author_id}/tickets&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;
        &amp;lt;/p&amp;gt;
                &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;Headers&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Authorization&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Authorization&amp;quot; class=&amp;quot;auth-value&amp;quot;               data-endpoint=&amp;quot;GETapi-v1-authors--author_id--tickets&amp;quot;
               value=&amp;quot;Bearer {YOUR_AUTH_KEY}&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;Bearer {YOUR_AUTH_KEY}&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Content-Type&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Content-Type&amp;quot;                data-endpoint=&amp;quot;GETapi-v1-authors--author_id--tickets&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Accept&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Accept&amp;quot;                data-endpoint=&amp;quot;GETapi-v1-authors--author_id--tickets&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                        &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;URL Parameters&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                    &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;author_id&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;integer&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;number&amp;quot; style=&amp;quot;display: none&amp;quot;
               step=&amp;quot;any&amp;quot;               name=&amp;quot;author_id&amp;quot;                data-endpoint=&amp;quot;GETapi-v1-authors--author_id--tickets&amp;quot;
               value=&amp;quot;1&amp;quot;
               data-component=&amp;quot;url&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;The ID of the author. Example: &amp;lt;code&amp;gt;1&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                    &amp;lt;/form&amp;gt;

                    &amp;lt;h2 id=&amp;quot;endpoints-POSTapi-v1-authors--author_id--tickets&amp;quot;&amp;gt;Store a newly created resource in storage.&amp;lt;/h2&amp;gt;

&amp;lt;p&amp;gt;
&amp;lt;small class=&amp;quot;badge badge-darkred&amp;quot;&amp;gt;requires authentication&amp;lt;/small&amp;gt;
&amp;lt;/p&amp;gt;



&amp;lt;span id=&amp;quot;example-requests-POSTapi-v1-authors--author_id--tickets&amp;quot;&amp;gt;
&amp;lt;blockquote&amp;gt;Example request:&amp;lt;/blockquote&amp;gt;


&amp;lt;div class=&amp;quot;bash-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-bash&amp;quot;&amp;gt;curl --request POST \
    &amp;quot;http://tickets-api.test/api/v1/authors/1/tickets&amp;quot; \
    --header &amp;quot;Authorization: Bearer {YOUR_AUTH_KEY}&amp;quot; \
    --header &amp;quot;Content-Type: application/json&amp;quot; \
    --header &amp;quot;Accept: application/json&amp;quot; \
    --data &amp;quot;{
    \&amp;quot;data\&amp;quot;: {
        \&amp;quot;attributes\&amp;quot;: {
            \&amp;quot;title\&amp;quot;: \&amp;quot;No example\&amp;quot;,
            \&amp;quot;description\&amp;quot;: \&amp;quot;Deleniti occaecati incidunt consequatur doloremque.\&amp;quot;,
            \&amp;quot;status\&amp;quot;: \&amp;quot;X\&amp;quot;
        }
    },
    \&amp;quot;author\&amp;quot;: 0
}&amp;quot;
&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;


&amp;lt;div class=&amp;quot;javascript-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-javascript&amp;quot;&amp;gt;const url = new URL(
    &amp;quot;http://tickets-api.test/api/v1/authors/1/tickets&amp;quot;
);

const headers = {
    &amp;quot;Authorization&amp;quot;: &amp;quot;Bearer {YOUR_AUTH_KEY}&amp;quot;,
    &amp;quot;Content-Type&amp;quot;: &amp;quot;application/json&amp;quot;,
    &amp;quot;Accept&amp;quot;: &amp;quot;application/json&amp;quot;,
};

let body = {
    &amp;quot;data&amp;quot;: {
        &amp;quot;attributes&amp;quot;: {
            &amp;quot;title&amp;quot;: &amp;quot;No example&amp;quot;,
            &amp;quot;description&amp;quot;: &amp;quot;Deleniti occaecati incidunt consequatur doloremque.&amp;quot;,
            &amp;quot;status&amp;quot;: &amp;quot;X&amp;quot;
        }
    },
    &amp;quot;author&amp;quot;: 0
};

fetch(url, {
    method: &amp;quot;POST&amp;quot;,
    headers,
    body: JSON.stringify(body),
}).then(response =&amp;amp;gt; response.json());&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;

&amp;lt;/span&amp;gt;

&amp;lt;span id=&amp;quot;example-responses-POSTapi-v1-authors--author_id--tickets&amp;quot;&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-results-POSTapi-v1-authors--author_id--tickets&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Received response&amp;lt;span
                id=&amp;quot;execution-response-status-POSTapi-v1-authors--author_id--tickets&amp;quot;&amp;gt;&amp;lt;/span&amp;gt;:
    &amp;lt;/blockquote&amp;gt;
    &amp;lt;pre class=&amp;quot;json&amp;quot;&amp;gt;&amp;lt;code id=&amp;quot;execution-response-content-POSTapi-v1-authors--author_id--tickets&amp;quot;
      data-empty-response-text=&amp;quot;&amp;lt;Empty response&amp;gt;&amp;quot; style=&amp;quot;max-height: 400px;&amp;quot;&amp;gt;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-error-POSTapi-v1-authors--author_id--tickets&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Request failed with error:&amp;lt;/blockquote&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code id=&amp;quot;execution-error-message-POSTapi-v1-authors--author_id--tickets&amp;quot;&amp;gt;

Tip: Check that you&amp;amp;#039;re properly connected to the network.
If you&amp;amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;form id=&amp;quot;form-POSTapi-v1-authors--author_id--tickets&amp;quot; data-method=&amp;quot;POST&amp;quot;
      data-path=&amp;quot;api/v1/authors/{author_id}/tickets&amp;quot;
      data-authed=&amp;quot;1&amp;quot;
      data-hasfiles=&amp;quot;0&amp;quot;
      data-isarraybody=&amp;quot;0&amp;quot;
      autocomplete=&amp;quot;off&amp;quot;
      onsubmit=&amp;quot;event.preventDefault(); executeTryOut(&amp;#039;POSTapi-v1-authors--author_id--tickets&amp;#039;, this);&amp;quot;&amp;gt;
    &amp;lt;h3&amp;gt;
        Request&amp;amp;nbsp;&amp;amp;nbsp;&amp;amp;nbsp;
                    &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-tryout-POSTapi-v1-authors--author_id--tickets&amp;quot;
                    onclick=&amp;quot;tryItOut(&amp;#039;POSTapi-v1-authors--author_id--tickets&amp;#039;);&amp;quot;&amp;gt;Try it out ⚡
            &amp;lt;/button&amp;gt;
            &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-canceltryout-POSTapi-v1-authors--author_id--tickets&amp;quot;
                    onclick=&amp;quot;cancelTryOut(&amp;#039;POSTapi-v1-authors--author_id--tickets&amp;#039;);&amp;quot; hidden&amp;gt;Cancel 🛑
            &amp;lt;/button&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
            &amp;lt;button type=&amp;quot;submit&amp;quot;
                    style=&amp;quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-executetryout-POSTapi-v1-authors--author_id--tickets&amp;quot;
                    data-initial-text=&amp;quot;Send Request 💥&amp;quot;
                    data-loading-text=&amp;quot;⏱ Sending...&amp;quot;
                    hidden&amp;gt;Send Request 💥
            &amp;lt;/button&amp;gt;
            &amp;lt;/h3&amp;gt;
            &amp;lt;p&amp;gt;
            &amp;lt;small class=&amp;quot;badge badge-black&amp;quot;&amp;gt;POST&amp;lt;/small&amp;gt;
            &amp;lt;b&amp;gt;&amp;lt;code&amp;gt;api/v1/authors/{author_id}/tickets&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;
        &amp;lt;/p&amp;gt;
                &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;Headers&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Authorization&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Authorization&amp;quot; class=&amp;quot;auth-value&amp;quot;               data-endpoint=&amp;quot;POSTapi-v1-authors--author_id--tickets&amp;quot;
               value=&amp;quot;Bearer {YOUR_AUTH_KEY}&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;Bearer {YOUR_AUTH_KEY}&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Content-Type&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Content-Type&amp;quot;                data-endpoint=&amp;quot;POSTapi-v1-authors--author_id--tickets&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Accept&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Accept&amp;quot;                data-endpoint=&amp;quot;POSTapi-v1-authors--author_id--tickets&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                        &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;URL Parameters&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                    &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;author_id&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;integer&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;number&amp;quot; style=&amp;quot;display: none&amp;quot;
               step=&amp;quot;any&amp;quot;               name=&amp;quot;author_id&amp;quot;                data-endpoint=&amp;quot;POSTapi-v1-authors--author_id--tickets&amp;quot;
               value=&amp;quot;1&amp;quot;
               data-component=&amp;quot;url&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;The ID of the author. Example: &amp;lt;code&amp;gt;1&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                            &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;Body Parameters&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
        &amp;lt;div style=&amp;quot; padding-left: 28px;  clear: unset;&amp;quot;&amp;gt;
        &amp;lt;details&amp;gt;
            &amp;lt;summary style=&amp;quot;padding-bottom: 10px;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;data&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;object&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
&amp;lt;br&amp;gt;

            &amp;lt;/summary&amp;gt;
                                                &amp;lt;div style=&amp;quot; margin-left: 14px; clear: unset;&amp;quot;&amp;gt;
        &amp;lt;details&amp;gt;
            &amp;lt;summary style=&amp;quot;padding-bottom: 10px;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;attributes&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;object&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
&amp;lt;br&amp;gt;

            &amp;lt;/summary&amp;gt;
                                                &amp;lt;div style=&amp;quot;margin-left: 28px; clear: unset;&amp;quot;&amp;gt;
                        &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;title&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;string&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;data.attributes.title&amp;quot;                data-endpoint=&amp;quot;POSTapi-v1-authors--author_id--tickets&amp;quot;
               value=&amp;quot;No example&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;The title of the ticket --. Example: &amp;lt;code&amp;gt;No example&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
                    &amp;lt;/div&amp;gt;
                                                                &amp;lt;div style=&amp;quot;margin-left: 28px; clear: unset;&amp;quot;&amp;gt;
                        &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;description&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;string&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;data.attributes.description&amp;quot;                data-endpoint=&amp;quot;POSTapi-v1-authors--author_id--tickets&amp;quot;
               value=&amp;quot;Deleniti occaecati incidunt consequatur doloremque.&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;The description of the ticket. Example: &amp;lt;code&amp;gt;Deleniti occaecati incidunt consequatur doloremque.&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
                    &amp;lt;/div&amp;gt;
                                                                &amp;lt;div style=&amp;quot;margin-left: 28px; clear: unset;&amp;quot;&amp;gt;
                        &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;status&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;string&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;data.attributes.status&amp;quot;                data-endpoint=&amp;quot;POSTapi-v1-authors--author_id--tickets&amp;quot;
               value=&amp;quot;X&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;The status of the ticket. Example: &amp;lt;code&amp;gt;X&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
Must be one of:
&amp;lt;ul style=&amp;quot;list-style-type: square;&amp;quot;&amp;gt;&amp;lt;li&amp;gt;&amp;lt;code&amp;gt;A&amp;lt;/code&amp;gt;&amp;lt;/li&amp;gt; &amp;lt;li&amp;gt;&amp;lt;code&amp;gt;C&amp;lt;/code&amp;gt;&amp;lt;/li&amp;gt; &amp;lt;li&amp;gt;&amp;lt;code&amp;gt;H&amp;lt;/code&amp;gt;&amp;lt;/li&amp;gt; &amp;lt;li&amp;gt;&amp;lt;code&amp;gt;X&amp;lt;/code&amp;gt;&amp;lt;/li&amp;gt;&amp;lt;/ul&amp;gt;
                    &amp;lt;/div&amp;gt;
                                    &amp;lt;/details&amp;gt;
        &amp;lt;/div&amp;gt;
                                        &amp;lt;/details&amp;gt;
        &amp;lt;/div&amp;gt;
                &amp;lt;div style=&amp;quot; padding-left: 28px;  clear: unset;&amp;quot;&amp;gt;
            &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;author&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;integer&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;number&amp;quot; style=&amp;quot;display: none&amp;quot;
               step=&amp;quot;any&amp;quot;               name=&amp;quot;author&amp;quot;                data-endpoint=&amp;quot;POSTapi-v1-authors--author_id--tickets&amp;quot;
               value=&amp;quot;0&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;The id of the author of the ticket. Must be 13. Example: &amp;lt;code&amp;gt;0&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
        &amp;lt;/div&amp;gt;
        &amp;lt;/form&amp;gt;

                    &amp;lt;h2 id=&amp;quot;endpoints-DELETEapi-v1-authors--author_id--tickets--id-&amp;quot;&amp;gt;DELETE api/v1/authors/{author_id}/tickets/{id}&amp;lt;/h2&amp;gt;

&amp;lt;p&amp;gt;
&amp;lt;small class=&amp;quot;badge badge-darkred&amp;quot;&amp;gt;requires authentication&amp;lt;/small&amp;gt;
&amp;lt;/p&amp;gt;



&amp;lt;span id=&amp;quot;example-requests-DELETEapi-v1-authors--author_id--tickets--id-&amp;quot;&amp;gt;
&amp;lt;blockquote&amp;gt;Example request:&amp;lt;/blockquote&amp;gt;


&amp;lt;div class=&amp;quot;bash-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-bash&amp;quot;&amp;gt;curl --request DELETE \
    &amp;quot;http://tickets-api.test/api/v1/authors/1/tickets/1&amp;quot; \
    --header &amp;quot;Authorization: Bearer {YOUR_AUTH_KEY}&amp;quot; \
    --header &amp;quot;Content-Type: application/json&amp;quot; \
    --header &amp;quot;Accept: application/json&amp;quot;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;


&amp;lt;div class=&amp;quot;javascript-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-javascript&amp;quot;&amp;gt;const url = new URL(
    &amp;quot;http://tickets-api.test/api/v1/authors/1/tickets/1&amp;quot;
);

const headers = {
    &amp;quot;Authorization&amp;quot;: &amp;quot;Bearer {YOUR_AUTH_KEY}&amp;quot;,
    &amp;quot;Content-Type&amp;quot;: &amp;quot;application/json&amp;quot;,
    &amp;quot;Accept&amp;quot;: &amp;quot;application/json&amp;quot;,
};

fetch(url, {
    method: &amp;quot;DELETE&amp;quot;,
    headers,
}).then(response =&amp;amp;gt; response.json());&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;

&amp;lt;/span&amp;gt;

&amp;lt;span id=&amp;quot;example-responses-DELETEapi-v1-authors--author_id--tickets--id-&amp;quot;&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-results-DELETEapi-v1-authors--author_id--tickets--id-&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Received response&amp;lt;span
                id=&amp;quot;execution-response-status-DELETEapi-v1-authors--author_id--tickets--id-&amp;quot;&amp;gt;&amp;lt;/span&amp;gt;:
    &amp;lt;/blockquote&amp;gt;
    &amp;lt;pre class=&amp;quot;json&amp;quot;&amp;gt;&amp;lt;code id=&amp;quot;execution-response-content-DELETEapi-v1-authors--author_id--tickets--id-&amp;quot;
      data-empty-response-text=&amp;quot;&amp;lt;Empty response&amp;gt;&amp;quot; style=&amp;quot;max-height: 400px;&amp;quot;&amp;gt;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-error-DELETEapi-v1-authors--author_id--tickets--id-&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Request failed with error:&amp;lt;/blockquote&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code id=&amp;quot;execution-error-message-DELETEapi-v1-authors--author_id--tickets--id-&amp;quot;&amp;gt;

Tip: Check that you&amp;amp;#039;re properly connected to the network.
If you&amp;amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;form id=&amp;quot;form-DELETEapi-v1-authors--author_id--tickets--id-&amp;quot; data-method=&amp;quot;DELETE&amp;quot;
      data-path=&amp;quot;api/v1/authors/{author_id}/tickets/{id}&amp;quot;
      data-authed=&amp;quot;1&amp;quot;
      data-hasfiles=&amp;quot;0&amp;quot;
      data-isarraybody=&amp;quot;0&amp;quot;
      autocomplete=&amp;quot;off&amp;quot;
      onsubmit=&amp;quot;event.preventDefault(); executeTryOut(&amp;#039;DELETEapi-v1-authors--author_id--tickets--id-&amp;#039;, this);&amp;quot;&amp;gt;
    &amp;lt;h3&amp;gt;
        Request&amp;amp;nbsp;&amp;amp;nbsp;&amp;amp;nbsp;
                    &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-tryout-DELETEapi-v1-authors--author_id--tickets--id-&amp;quot;
                    onclick=&amp;quot;tryItOut(&amp;#039;DELETEapi-v1-authors--author_id--tickets--id-&amp;#039;);&amp;quot;&amp;gt;Try it out ⚡
            &amp;lt;/button&amp;gt;
            &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-canceltryout-DELETEapi-v1-authors--author_id--tickets--id-&amp;quot;
                    onclick=&amp;quot;cancelTryOut(&amp;#039;DELETEapi-v1-authors--author_id--tickets--id-&amp;#039;);&amp;quot; hidden&amp;gt;Cancel 🛑
            &amp;lt;/button&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
            &amp;lt;button type=&amp;quot;submit&amp;quot;
                    style=&amp;quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-executetryout-DELETEapi-v1-authors--author_id--tickets--id-&amp;quot;
                    data-initial-text=&amp;quot;Send Request 💥&amp;quot;
                    data-loading-text=&amp;quot;⏱ Sending...&amp;quot;
                    hidden&amp;gt;Send Request 💥
            &amp;lt;/button&amp;gt;
            &amp;lt;/h3&amp;gt;
            &amp;lt;p&amp;gt;
            &amp;lt;small class=&amp;quot;badge badge-red&amp;quot;&amp;gt;DELETE&amp;lt;/small&amp;gt;
            &amp;lt;b&amp;gt;&amp;lt;code&amp;gt;api/v1/authors/{author_id}/tickets/{id}&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;
        &amp;lt;/p&amp;gt;
                &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;Headers&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Authorization&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Authorization&amp;quot; class=&amp;quot;auth-value&amp;quot;               data-endpoint=&amp;quot;DELETEapi-v1-authors--author_id--tickets--id-&amp;quot;
               value=&amp;quot;Bearer {YOUR_AUTH_KEY}&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;Bearer {YOUR_AUTH_KEY}&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Content-Type&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Content-Type&amp;quot;                data-endpoint=&amp;quot;DELETEapi-v1-authors--author_id--tickets--id-&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Accept&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Accept&amp;quot;                data-endpoint=&amp;quot;DELETEapi-v1-authors--author_id--tickets--id-&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                        &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;URL Parameters&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                    &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;author_id&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;integer&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;number&amp;quot; style=&amp;quot;display: none&amp;quot;
               step=&amp;quot;any&amp;quot;               name=&amp;quot;author_id&amp;quot;                data-endpoint=&amp;quot;DELETEapi-v1-authors--author_id--tickets--id-&amp;quot;
               value=&amp;quot;1&amp;quot;
               data-component=&amp;quot;url&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;The ID of the author. Example: &amp;lt;code&amp;gt;1&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                    &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;id&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;integer&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;number&amp;quot; style=&amp;quot;display: none&amp;quot;
               step=&amp;quot;any&amp;quot;               name=&amp;quot;id&amp;quot;                data-endpoint=&amp;quot;DELETEapi-v1-authors--author_id--tickets--id-&amp;quot;
               value=&amp;quot;1&amp;quot;
               data-component=&amp;quot;url&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;The ID of the ticket. Example: &amp;lt;code&amp;gt;1&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                    &amp;lt;/form&amp;gt;

                    &amp;lt;h2 id=&amp;quot;endpoints-PUTapi-v1-authors--author_id--tickets--ticket_id-&amp;quot;&amp;gt;PUT api/v1/authors/{author_id}/tickets/{ticket_id}&amp;lt;/h2&amp;gt;

&amp;lt;p&amp;gt;
&amp;lt;small class=&amp;quot;badge badge-darkred&amp;quot;&amp;gt;requires authentication&amp;lt;/small&amp;gt;
&amp;lt;/p&amp;gt;



&amp;lt;span id=&amp;quot;example-requests-PUTapi-v1-authors--author_id--tickets--ticket_id-&amp;quot;&amp;gt;
&amp;lt;blockquote&amp;gt;Example request:&amp;lt;/blockquote&amp;gt;


&amp;lt;div class=&amp;quot;bash-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-bash&amp;quot;&amp;gt;curl --request PUT \
    &amp;quot;http://tickets-api.test/api/v1/authors/1/tickets/1&amp;quot; \
    --header &amp;quot;Authorization: Bearer {YOUR_AUTH_KEY}&amp;quot; \
    --header &amp;quot;Content-Type: application/json&amp;quot; \
    --header &amp;quot;Accept: application/json&amp;quot; \
    --data &amp;quot;{
    \&amp;quot;data\&amp;quot;: {
        \&amp;quot;attributes\&amp;quot;: {
            \&amp;quot;title\&amp;quot;: \&amp;quot;voluptate\&amp;quot;,
            \&amp;quot;description\&amp;quot;: \&amp;quot;Reiciendis ipsam eveniet aut.\&amp;quot;,
            \&amp;quot;status\&amp;quot;: \&amp;quot;A\&amp;quot;
        },
        \&amp;quot;relationships\&amp;quot;: {
            \&amp;quot;author\&amp;quot;: {
                \&amp;quot;data\&amp;quot;: {
                    \&amp;quot;id\&amp;quot;: 1
                }
            }
        }
    }
}&amp;quot;
&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;


&amp;lt;div class=&amp;quot;javascript-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-javascript&amp;quot;&amp;gt;const url = new URL(
    &amp;quot;http://tickets-api.test/api/v1/authors/1/tickets/1&amp;quot;
);

const headers = {
    &amp;quot;Authorization&amp;quot;: &amp;quot;Bearer {YOUR_AUTH_KEY}&amp;quot;,
    &amp;quot;Content-Type&amp;quot;: &amp;quot;application/json&amp;quot;,
    &amp;quot;Accept&amp;quot;: &amp;quot;application/json&amp;quot;,
};

let body = {
    &amp;quot;data&amp;quot;: {
        &amp;quot;attributes&amp;quot;: {
            &amp;quot;title&amp;quot;: &amp;quot;voluptate&amp;quot;,
            &amp;quot;description&amp;quot;: &amp;quot;Reiciendis ipsam eveniet aut.&amp;quot;,
            &amp;quot;status&amp;quot;: &amp;quot;A&amp;quot;
        },
        &amp;quot;relationships&amp;quot;: {
            &amp;quot;author&amp;quot;: {
                &amp;quot;data&amp;quot;: {
                    &amp;quot;id&amp;quot;: 1
                }
            }
        }
    }
};

fetch(url, {
    method: &amp;quot;PUT&amp;quot;,
    headers,
    body: JSON.stringify(body),
}).then(response =&amp;amp;gt; response.json());&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;

&amp;lt;/span&amp;gt;

&amp;lt;span id=&amp;quot;example-responses-PUTapi-v1-authors--author_id--tickets--ticket_id-&amp;quot;&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-results-PUTapi-v1-authors--author_id--tickets--ticket_id-&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Received response&amp;lt;span
                id=&amp;quot;execution-response-status-PUTapi-v1-authors--author_id--tickets--ticket_id-&amp;quot;&amp;gt;&amp;lt;/span&amp;gt;:
    &amp;lt;/blockquote&amp;gt;
    &amp;lt;pre class=&amp;quot;json&amp;quot;&amp;gt;&amp;lt;code id=&amp;quot;execution-response-content-PUTapi-v1-authors--author_id--tickets--ticket_id-&amp;quot;
      data-empty-response-text=&amp;quot;&amp;lt;Empty response&amp;gt;&amp;quot; style=&amp;quot;max-height: 400px;&amp;quot;&amp;gt;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-error-PUTapi-v1-authors--author_id--tickets--ticket_id-&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Request failed with error:&amp;lt;/blockquote&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code id=&amp;quot;execution-error-message-PUTapi-v1-authors--author_id--tickets--ticket_id-&amp;quot;&amp;gt;

Tip: Check that you&amp;amp;#039;re properly connected to the network.
If you&amp;amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;form id=&amp;quot;form-PUTapi-v1-authors--author_id--tickets--ticket_id-&amp;quot; data-method=&amp;quot;PUT&amp;quot;
      data-path=&amp;quot;api/v1/authors/{author_id}/tickets/{ticket_id}&amp;quot;
      data-authed=&amp;quot;1&amp;quot;
      data-hasfiles=&amp;quot;0&amp;quot;
      data-isarraybody=&amp;quot;0&amp;quot;
      autocomplete=&amp;quot;off&amp;quot;
      onsubmit=&amp;quot;event.preventDefault(); executeTryOut(&amp;#039;PUTapi-v1-authors--author_id--tickets--ticket_id-&amp;#039;, this);&amp;quot;&amp;gt;
    &amp;lt;h3&amp;gt;
        Request&amp;amp;nbsp;&amp;amp;nbsp;&amp;amp;nbsp;
                    &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-tryout-PUTapi-v1-authors--author_id--tickets--ticket_id-&amp;quot;
                    onclick=&amp;quot;tryItOut(&amp;#039;PUTapi-v1-authors--author_id--tickets--ticket_id-&amp;#039;);&amp;quot;&amp;gt;Try it out ⚡
            &amp;lt;/button&amp;gt;
            &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-canceltryout-PUTapi-v1-authors--author_id--tickets--ticket_id-&amp;quot;
                    onclick=&amp;quot;cancelTryOut(&amp;#039;PUTapi-v1-authors--author_id--tickets--ticket_id-&amp;#039;);&amp;quot; hidden&amp;gt;Cancel 🛑
            &amp;lt;/button&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
            &amp;lt;button type=&amp;quot;submit&amp;quot;
                    style=&amp;quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-executetryout-PUTapi-v1-authors--author_id--tickets--ticket_id-&amp;quot;
                    data-initial-text=&amp;quot;Send Request 💥&amp;quot;
                    data-loading-text=&amp;quot;⏱ Sending...&amp;quot;
                    hidden&amp;gt;Send Request 💥
            &amp;lt;/button&amp;gt;
            &amp;lt;/h3&amp;gt;
            &amp;lt;p&amp;gt;
            &amp;lt;small class=&amp;quot;badge badge-darkblue&amp;quot;&amp;gt;PUT&amp;lt;/small&amp;gt;
            &amp;lt;b&amp;gt;&amp;lt;code&amp;gt;api/v1/authors/{author_id}/tickets/{ticket_id}&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;
        &amp;lt;/p&amp;gt;
                &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;Headers&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Authorization&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Authorization&amp;quot; class=&amp;quot;auth-value&amp;quot;               data-endpoint=&amp;quot;PUTapi-v1-authors--author_id--tickets--ticket_id-&amp;quot;
               value=&amp;quot;Bearer {YOUR_AUTH_KEY}&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;Bearer {YOUR_AUTH_KEY}&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Content-Type&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Content-Type&amp;quot;                data-endpoint=&amp;quot;PUTapi-v1-authors--author_id--tickets--ticket_id-&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Accept&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Accept&amp;quot;                data-endpoint=&amp;quot;PUTapi-v1-authors--author_id--tickets--ticket_id-&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                        &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;URL Parameters&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                    &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;author_id&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;integer&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;number&amp;quot; style=&amp;quot;display: none&amp;quot;
               step=&amp;quot;any&amp;quot;               name=&amp;quot;author_id&amp;quot;                data-endpoint=&amp;quot;PUTapi-v1-authors--author_id--tickets--ticket_id-&amp;quot;
               value=&amp;quot;1&amp;quot;
               data-component=&amp;quot;url&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;The ID of the author. Example: &amp;lt;code&amp;gt;1&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                    &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;ticket_id&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;integer&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;number&amp;quot; style=&amp;quot;display: none&amp;quot;
               step=&amp;quot;any&amp;quot;               name=&amp;quot;ticket_id&amp;quot;                data-endpoint=&amp;quot;PUTapi-v1-authors--author_id--tickets--ticket_id-&amp;quot;
               value=&amp;quot;1&amp;quot;
               data-component=&amp;quot;url&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;The ID of the ticket. Example: &amp;lt;code&amp;gt;1&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                            &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;Body Parameters&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
        &amp;lt;div style=&amp;quot; padding-left: 28px;  clear: unset;&amp;quot;&amp;gt;
        &amp;lt;details&amp;gt;
            &amp;lt;summary style=&amp;quot;padding-bottom: 10px;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;data&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;object&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
&amp;lt;br&amp;gt;

            &amp;lt;/summary&amp;gt;
                                                &amp;lt;div style=&amp;quot; margin-left: 14px; clear: unset;&amp;quot;&amp;gt;
        &amp;lt;details&amp;gt;
            &amp;lt;summary style=&amp;quot;padding-bottom: 10px;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;attributes&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;object&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
&amp;lt;br&amp;gt;

            &amp;lt;/summary&amp;gt;
                                                &amp;lt;div style=&amp;quot;margin-left: 28px; clear: unset;&amp;quot;&amp;gt;
                        &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;title&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;string&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;data.attributes.title&amp;quot;                data-endpoint=&amp;quot;PUTapi-v1-authors--author_id--tickets--ticket_id-&amp;quot;
               value=&amp;quot;voluptate&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;voluptate&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
                    &amp;lt;/div&amp;gt;
                                                                &amp;lt;div style=&amp;quot;margin-left: 28px; clear: unset;&amp;quot;&amp;gt;
                        &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;description&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;string&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;data.attributes.description&amp;quot;                data-endpoint=&amp;quot;PUTapi-v1-authors--author_id--tickets--ticket_id-&amp;quot;
               value=&amp;quot;Reiciendis ipsam eveniet aut.&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;Reiciendis ipsam eveniet aut.&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
                    &amp;lt;/div&amp;gt;
                                                                &amp;lt;div style=&amp;quot;margin-left: 28px; clear: unset;&amp;quot;&amp;gt;
                        &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;status&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;string&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;data.attributes.status&amp;quot;                data-endpoint=&amp;quot;PUTapi-v1-authors--author_id--tickets--ticket_id-&amp;quot;
               value=&amp;quot;A&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;A&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
Must be one of:
&amp;lt;ul style=&amp;quot;list-style-type: square;&amp;quot;&amp;gt;&amp;lt;li&amp;gt;&amp;lt;code&amp;gt;A&amp;lt;/code&amp;gt;&amp;lt;/li&amp;gt; &amp;lt;li&amp;gt;&amp;lt;code&amp;gt;C&amp;lt;/code&amp;gt;&amp;lt;/li&amp;gt; &amp;lt;li&amp;gt;&amp;lt;code&amp;gt;H&amp;lt;/code&amp;gt;&amp;lt;/li&amp;gt; &amp;lt;li&amp;gt;&amp;lt;code&amp;gt;X&amp;lt;/code&amp;gt;&amp;lt;/li&amp;gt;&amp;lt;/ul&amp;gt;
                    &amp;lt;/div&amp;gt;
                                    &amp;lt;/details&amp;gt;
        &amp;lt;/div&amp;gt;
                                                                    &amp;lt;div style=&amp;quot; margin-left: 14px; clear: unset;&amp;quot;&amp;gt;
        &amp;lt;details&amp;gt;
            &amp;lt;summary style=&amp;quot;padding-bottom: 10px;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;relationships&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;object&amp;lt;/small&amp;gt;&amp;amp;nbsp;
&amp;lt;i&amp;gt;optional&amp;lt;/i&amp;gt; &amp;amp;nbsp;
&amp;lt;br&amp;gt;

            &amp;lt;/summary&amp;gt;
                                                &amp;lt;div style=&amp;quot; margin-left: 28px; clear: unset;&amp;quot;&amp;gt;
        &amp;lt;details&amp;gt;
            &amp;lt;summary style=&amp;quot;padding-bottom: 10px;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;author&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;object&amp;lt;/small&amp;gt;&amp;amp;nbsp;
&amp;lt;i&amp;gt;optional&amp;lt;/i&amp;gt; &amp;amp;nbsp;
&amp;lt;br&amp;gt;

            &amp;lt;/summary&amp;gt;
                                                &amp;lt;div style=&amp;quot; margin-left: 42px; clear: unset;&amp;quot;&amp;gt;
        &amp;lt;details&amp;gt;
            &amp;lt;summary style=&amp;quot;padding-bottom: 10px;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;data&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;object&amp;lt;/small&amp;gt;&amp;amp;nbsp;
&amp;lt;i&amp;gt;optional&amp;lt;/i&amp;gt; &amp;amp;nbsp;
&amp;lt;br&amp;gt;

            &amp;lt;/summary&amp;gt;
                                                &amp;lt;div style=&amp;quot;margin-left: 56px; clear: unset;&amp;quot;&amp;gt;
                        &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;id&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;integer&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;number&amp;quot; style=&amp;quot;display: none&amp;quot;
               step=&amp;quot;any&amp;quot;               name=&amp;quot;data.relationships.author.data.id&amp;quot;                data-endpoint=&amp;quot;PUTapi-v1-authors--author_id--tickets--ticket_id-&amp;quot;
               value=&amp;quot;1&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;1&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
                    &amp;lt;/div&amp;gt;
                                    &amp;lt;/details&amp;gt;
        &amp;lt;/div&amp;gt;
                                        &amp;lt;/details&amp;gt;
        &amp;lt;/div&amp;gt;
                                        &amp;lt;/details&amp;gt;
        &amp;lt;/div&amp;gt;
                                        &amp;lt;/details&amp;gt;
        &amp;lt;/div&amp;gt;
        &amp;lt;/form&amp;gt;

                    &amp;lt;h2 id=&amp;quot;endpoints-PATCHapi-v1-authors--author_id--tickets--ticket_id-&amp;quot;&amp;gt;PATCH api/v1/authors/{author_id}/tickets/{ticket_id}&amp;lt;/h2&amp;gt;

&amp;lt;p&amp;gt;
&amp;lt;small class=&amp;quot;badge badge-darkred&amp;quot;&amp;gt;requires authentication&amp;lt;/small&amp;gt;
&amp;lt;/p&amp;gt;



&amp;lt;span id=&amp;quot;example-requests-PATCHapi-v1-authors--author_id--tickets--ticket_id-&amp;quot;&amp;gt;
&amp;lt;blockquote&amp;gt;Example request:&amp;lt;/blockquote&amp;gt;


&amp;lt;div class=&amp;quot;bash-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-bash&amp;quot;&amp;gt;curl --request PATCH \
    &amp;quot;http://tickets-api.test/api/v1/authors/1/tickets/1&amp;quot; \
    --header &amp;quot;Authorization: Bearer {YOUR_AUTH_KEY}&amp;quot; \
    --header &amp;quot;Content-Type: application/json&amp;quot; \
    --header &amp;quot;Accept: application/json&amp;quot; \
    --data &amp;quot;{
    \&amp;quot;data\&amp;quot;: {
        \&amp;quot;attributes\&amp;quot;: {
            \&amp;quot;title\&amp;quot;: \&amp;quot;sit\&amp;quot;,
            \&amp;quot;description\&amp;quot;: \&amp;quot;Delectus quidem excepturi quam fugiat totam quo.\&amp;quot;,
            \&amp;quot;status\&amp;quot;: \&amp;quot;X\&amp;quot;
        },
        \&amp;quot;relationships\&amp;quot;: {
            \&amp;quot;author\&amp;quot;: {
                \&amp;quot;data\&amp;quot;: []
            }
        }
    }
}&amp;quot;
&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;


&amp;lt;div class=&amp;quot;javascript-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-javascript&amp;quot;&amp;gt;const url = new URL(
    &amp;quot;http://tickets-api.test/api/v1/authors/1/tickets/1&amp;quot;
);

const headers = {
    &amp;quot;Authorization&amp;quot;: &amp;quot;Bearer {YOUR_AUTH_KEY}&amp;quot;,
    &amp;quot;Content-Type&amp;quot;: &amp;quot;application/json&amp;quot;,
    &amp;quot;Accept&amp;quot;: &amp;quot;application/json&amp;quot;,
};

let body = {
    &amp;quot;data&amp;quot;: {
        &amp;quot;attributes&amp;quot;: {
            &amp;quot;title&amp;quot;: &amp;quot;sit&amp;quot;,
            &amp;quot;description&amp;quot;: &amp;quot;Delectus quidem excepturi quam fugiat totam quo.&amp;quot;,
            &amp;quot;status&amp;quot;: &amp;quot;X&amp;quot;
        },
        &amp;quot;relationships&amp;quot;: {
            &amp;quot;author&amp;quot;: {
                &amp;quot;data&amp;quot;: []
            }
        }
    }
};

fetch(url, {
    method: &amp;quot;PATCH&amp;quot;,
    headers,
    body: JSON.stringify(body),
}).then(response =&amp;amp;gt; response.json());&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;

&amp;lt;/span&amp;gt;

&amp;lt;span id=&amp;quot;example-responses-PATCHapi-v1-authors--author_id--tickets--ticket_id-&amp;quot;&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-results-PATCHapi-v1-authors--author_id--tickets--ticket_id-&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Received response&amp;lt;span
                id=&amp;quot;execution-response-status-PATCHapi-v1-authors--author_id--tickets--ticket_id-&amp;quot;&amp;gt;&amp;lt;/span&amp;gt;:
    &amp;lt;/blockquote&amp;gt;
    &amp;lt;pre class=&amp;quot;json&amp;quot;&amp;gt;&amp;lt;code id=&amp;quot;execution-response-content-PATCHapi-v1-authors--author_id--tickets--ticket_id-&amp;quot;
      data-empty-response-text=&amp;quot;&amp;lt;Empty response&amp;gt;&amp;quot; style=&amp;quot;max-height: 400px;&amp;quot;&amp;gt;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-error-PATCHapi-v1-authors--author_id--tickets--ticket_id-&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Request failed with error:&amp;lt;/blockquote&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code id=&amp;quot;execution-error-message-PATCHapi-v1-authors--author_id--tickets--ticket_id-&amp;quot;&amp;gt;

Tip: Check that you&amp;amp;#039;re properly connected to the network.
If you&amp;amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;form id=&amp;quot;form-PATCHapi-v1-authors--author_id--tickets--ticket_id-&amp;quot; data-method=&amp;quot;PATCH&amp;quot;
      data-path=&amp;quot;api/v1/authors/{author_id}/tickets/{ticket_id}&amp;quot;
      data-authed=&amp;quot;1&amp;quot;
      data-hasfiles=&amp;quot;0&amp;quot;
      data-isarraybody=&amp;quot;0&amp;quot;
      autocomplete=&amp;quot;off&amp;quot;
      onsubmit=&amp;quot;event.preventDefault(); executeTryOut(&amp;#039;PATCHapi-v1-authors--author_id--tickets--ticket_id-&amp;#039;, this);&amp;quot;&amp;gt;
    &amp;lt;h3&amp;gt;
        Request&amp;amp;nbsp;&amp;amp;nbsp;&amp;amp;nbsp;
                    &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-tryout-PATCHapi-v1-authors--author_id--tickets--ticket_id-&amp;quot;
                    onclick=&amp;quot;tryItOut(&amp;#039;PATCHapi-v1-authors--author_id--tickets--ticket_id-&amp;#039;);&amp;quot;&amp;gt;Try it out ⚡
            &amp;lt;/button&amp;gt;
            &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-canceltryout-PATCHapi-v1-authors--author_id--tickets--ticket_id-&amp;quot;
                    onclick=&amp;quot;cancelTryOut(&amp;#039;PATCHapi-v1-authors--author_id--tickets--ticket_id-&amp;#039;);&amp;quot; hidden&amp;gt;Cancel 🛑
            &amp;lt;/button&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
            &amp;lt;button type=&amp;quot;submit&amp;quot;
                    style=&amp;quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-executetryout-PATCHapi-v1-authors--author_id--tickets--ticket_id-&amp;quot;
                    data-initial-text=&amp;quot;Send Request 💥&amp;quot;
                    data-loading-text=&amp;quot;⏱ Sending...&amp;quot;
                    hidden&amp;gt;Send Request 💥
            &amp;lt;/button&amp;gt;
            &amp;lt;/h3&amp;gt;
            &amp;lt;p&amp;gt;
            &amp;lt;small class=&amp;quot;badge badge-purple&amp;quot;&amp;gt;PATCH&amp;lt;/small&amp;gt;
            &amp;lt;b&amp;gt;&amp;lt;code&amp;gt;api/v1/authors/{author_id}/tickets/{ticket_id}&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;
        &amp;lt;/p&amp;gt;
                &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;Headers&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Authorization&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Authorization&amp;quot; class=&amp;quot;auth-value&amp;quot;               data-endpoint=&amp;quot;PATCHapi-v1-authors--author_id--tickets--ticket_id-&amp;quot;
               value=&amp;quot;Bearer {YOUR_AUTH_KEY}&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;Bearer {YOUR_AUTH_KEY}&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Content-Type&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Content-Type&amp;quot;                data-endpoint=&amp;quot;PATCHapi-v1-authors--author_id--tickets--ticket_id-&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Accept&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Accept&amp;quot;                data-endpoint=&amp;quot;PATCHapi-v1-authors--author_id--tickets--ticket_id-&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                        &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;URL Parameters&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                    &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;author_id&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;integer&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;number&amp;quot; style=&amp;quot;display: none&amp;quot;
               step=&amp;quot;any&amp;quot;               name=&amp;quot;author_id&amp;quot;                data-endpoint=&amp;quot;PATCHapi-v1-authors--author_id--tickets--ticket_id-&amp;quot;
               value=&amp;quot;1&amp;quot;
               data-component=&amp;quot;url&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;The ID of the author. Example: &amp;lt;code&amp;gt;1&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                    &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;ticket_id&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;integer&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;number&amp;quot; style=&amp;quot;display: none&amp;quot;
               step=&amp;quot;any&amp;quot;               name=&amp;quot;ticket_id&amp;quot;                data-endpoint=&amp;quot;PATCHapi-v1-authors--author_id--tickets--ticket_id-&amp;quot;
               value=&amp;quot;1&amp;quot;
               data-component=&amp;quot;url&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;The ID of the ticket. Example: &amp;lt;code&amp;gt;1&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                            &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;Body Parameters&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
        &amp;lt;div style=&amp;quot; padding-left: 28px;  clear: unset;&amp;quot;&amp;gt;
        &amp;lt;details&amp;gt;
            &amp;lt;summary style=&amp;quot;padding-bottom: 10px;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;data&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;object&amp;lt;/small&amp;gt;&amp;amp;nbsp;
&amp;lt;i&amp;gt;optional&amp;lt;/i&amp;gt; &amp;amp;nbsp;
&amp;lt;br&amp;gt;

            &amp;lt;/summary&amp;gt;
                                                &amp;lt;div style=&amp;quot; margin-left: 14px; clear: unset;&amp;quot;&amp;gt;
        &amp;lt;details&amp;gt;
            &amp;lt;summary style=&amp;quot;padding-bottom: 10px;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;attributes&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;object&amp;lt;/small&amp;gt;&amp;amp;nbsp;
&amp;lt;i&amp;gt;optional&amp;lt;/i&amp;gt; &amp;amp;nbsp;
&amp;lt;br&amp;gt;

            &amp;lt;/summary&amp;gt;
                                                &amp;lt;div style=&amp;quot;margin-left: 28px; clear: unset;&amp;quot;&amp;gt;
                        &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;title&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;string&amp;lt;/small&amp;gt;&amp;amp;nbsp;
&amp;lt;i&amp;gt;optional&amp;lt;/i&amp;gt; &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;data.attributes.title&amp;quot;                data-endpoint=&amp;quot;PATCHapi-v1-authors--author_id--tickets--ticket_id-&amp;quot;
               value=&amp;quot;sit&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;sit&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
                    &amp;lt;/div&amp;gt;
                                                                &amp;lt;div style=&amp;quot;margin-left: 28px; clear: unset;&amp;quot;&amp;gt;
                        &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;description&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;string&amp;lt;/small&amp;gt;&amp;amp;nbsp;
&amp;lt;i&amp;gt;optional&amp;lt;/i&amp;gt; &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;data.attributes.description&amp;quot;                data-endpoint=&amp;quot;PATCHapi-v1-authors--author_id--tickets--ticket_id-&amp;quot;
               value=&amp;quot;Delectus quidem excepturi quam fugiat totam quo.&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;Delectus quidem excepturi quam fugiat totam quo.&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
                    &amp;lt;/div&amp;gt;
                                                                &amp;lt;div style=&amp;quot;margin-left: 28px; clear: unset;&amp;quot;&amp;gt;
                        &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;status&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;string&amp;lt;/small&amp;gt;&amp;amp;nbsp;
&amp;lt;i&amp;gt;optional&amp;lt;/i&amp;gt; &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;data.attributes.status&amp;quot;                data-endpoint=&amp;quot;PATCHapi-v1-authors--author_id--tickets--ticket_id-&amp;quot;
               value=&amp;quot;X&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;X&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
Must be one of:
&amp;lt;ul style=&amp;quot;list-style-type: square;&amp;quot;&amp;gt;&amp;lt;li&amp;gt;&amp;lt;code&amp;gt;A&amp;lt;/code&amp;gt;&amp;lt;/li&amp;gt; &amp;lt;li&amp;gt;&amp;lt;code&amp;gt;C&amp;lt;/code&amp;gt;&amp;lt;/li&amp;gt; &amp;lt;li&amp;gt;&amp;lt;code&amp;gt;H&amp;lt;/code&amp;gt;&amp;lt;/li&amp;gt; &amp;lt;li&amp;gt;&amp;lt;code&amp;gt;X&amp;lt;/code&amp;gt;&amp;lt;/li&amp;gt;&amp;lt;/ul&amp;gt;
                    &amp;lt;/div&amp;gt;
                                    &amp;lt;/details&amp;gt;
        &amp;lt;/div&amp;gt;
                                                                    &amp;lt;div style=&amp;quot; margin-left: 14px; clear: unset;&amp;quot;&amp;gt;
        &amp;lt;details&amp;gt;
            &amp;lt;summary style=&amp;quot;padding-bottom: 10px;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;relationships&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;object&amp;lt;/small&amp;gt;&amp;amp;nbsp;
&amp;lt;i&amp;gt;optional&amp;lt;/i&amp;gt; &amp;amp;nbsp;
&amp;lt;br&amp;gt;

            &amp;lt;/summary&amp;gt;
                                                &amp;lt;div style=&amp;quot; margin-left: 28px; clear: unset;&amp;quot;&amp;gt;
        &amp;lt;details&amp;gt;
            &amp;lt;summary style=&amp;quot;padding-bottom: 10px;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;author&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;object&amp;lt;/small&amp;gt;&amp;amp;nbsp;
&amp;lt;i&amp;gt;optional&amp;lt;/i&amp;gt; &amp;amp;nbsp;
&amp;lt;br&amp;gt;

            &amp;lt;/summary&amp;gt;
                                                &amp;lt;div style=&amp;quot; margin-left: 42px; clear: unset;&amp;quot;&amp;gt;
        &amp;lt;details&amp;gt;
            &amp;lt;summary style=&amp;quot;padding-bottom: 10px;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;data&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;object&amp;lt;/small&amp;gt;&amp;amp;nbsp;
&amp;lt;i&amp;gt;optional&amp;lt;/i&amp;gt; &amp;amp;nbsp;
&amp;lt;br&amp;gt;

            &amp;lt;/summary&amp;gt;
                                                &amp;lt;div style=&amp;quot;margin-left: 56px; clear: unset;&amp;quot;&amp;gt;
                        &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;id&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;string&amp;lt;/small&amp;gt;&amp;amp;nbsp;
&amp;lt;i&amp;gt;optional&amp;lt;/i&amp;gt; &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;data.relationships.author.data.id&amp;quot;                data-endpoint=&amp;quot;PATCHapi-v1-authors--author_id--tickets--ticket_id-&amp;quot;
               value=&amp;quot;&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;

                    &amp;lt;/div&amp;gt;
                                    &amp;lt;/details&amp;gt;
        &amp;lt;/div&amp;gt;
                                        &amp;lt;/details&amp;gt;
        &amp;lt;/div&amp;gt;
                                        &amp;lt;/details&amp;gt;
        &amp;lt;/div&amp;gt;
                                        &amp;lt;/details&amp;gt;
        &amp;lt;/div&amp;gt;
        &amp;lt;/form&amp;gt;

                &amp;lt;h1 id=&amp;quot;managing-tickets&amp;quot;&amp;gt;Managing Tickets&amp;lt;/h1&amp;gt;

    

                                &amp;lt;h2 id=&amp;quot;managing-tickets-GETapi-v1-tickets&amp;quot;&amp;gt;Get All Tickets.&amp;lt;/h2&amp;gt;

&amp;lt;p&amp;gt;
&amp;lt;small class=&amp;quot;badge badge-darkred&amp;quot;&amp;gt;requires authentication&amp;lt;/small&amp;gt;
&amp;lt;/p&amp;gt;



&amp;lt;span id=&amp;quot;example-requests-GETapi-v1-tickets&amp;quot;&amp;gt;
&amp;lt;blockquote&amp;gt;Example request:&amp;lt;/blockquote&amp;gt;


&amp;lt;div class=&amp;quot;bash-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-bash&amp;quot;&amp;gt;curl --request GET \
    --get &amp;quot;http://tickets-api.test/api/v1/tickets?sort=sort%3Dtitle%2C-created_at&amp;amp;amp;filter%5Bstatus%5D=sapiente&amp;amp;amp;filter%5Btitle%5D=filter%5Btitle%5D%3D%2Afix%2A&amp;quot; \
    --header &amp;quot;Authorization: Bearer {YOUR_AUTH_KEY}&amp;quot; \
    --header &amp;quot;Content-Type: application/json&amp;quot; \
    --header &amp;quot;Accept: application/json&amp;quot;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;


&amp;lt;div class=&amp;quot;javascript-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-javascript&amp;quot;&amp;gt;const url = new URL(
    &amp;quot;http://tickets-api.test/api/v1/tickets&amp;quot;
);

const params = {
    &amp;quot;sort&amp;quot;: &amp;quot;sort=title,-created_at&amp;quot;,
    &amp;quot;filter[status]&amp;quot;: &amp;quot;sapiente&amp;quot;,
    &amp;quot;filter[title]&amp;quot;: &amp;quot;filter[title]=*fix*&amp;quot;,
};
Object.keys(params)
    .forEach(key =&amp;amp;gt; url.searchParams.append(key, params[key]));

const headers = {
    &amp;quot;Authorization&amp;quot;: &amp;quot;Bearer {YOUR_AUTH_KEY}&amp;quot;,
    &amp;quot;Content-Type&amp;quot;: &amp;quot;application/json&amp;quot;,
    &amp;quot;Accept&amp;quot;: &amp;quot;application/json&amp;quot;,
};

fetch(url, {
    method: &amp;quot;GET&amp;quot;,
    headers,
}).then(response =&amp;amp;gt; response.json());&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;

&amp;lt;/span&amp;gt;

&amp;lt;span id=&amp;quot;example-responses-GETapi-v1-tickets&amp;quot;&amp;gt;
            &amp;lt;blockquote&amp;gt;
            &amp;lt;p&amp;gt;Example response (200):&amp;lt;/p&amp;gt;
        &amp;lt;/blockquote&amp;gt;
                &amp;lt;details class=&amp;quot;annotation&amp;quot;&amp;gt;
            &amp;lt;summary style=&amp;quot;cursor: pointer;&amp;quot;&amp;gt;
                &amp;lt;small onclick=&amp;quot;textContent = parentElement.parentElement.open ? &amp;#039;Show headers&amp;#039; : &amp;#039;Hide headers&amp;#039;&amp;quot;&amp;gt;Show headers&amp;lt;/small&amp;gt;
            &amp;lt;/summary&amp;gt;
            &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-http&amp;quot;&amp;gt;cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 &amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/details&amp;gt;         &amp;lt;pre&amp;gt;

&amp;lt;code class=&amp;quot;language-json&amp;quot; style=&amp;quot;max-height: 300px;&amp;quot;&amp;gt;{
    &amp;amp;quot;data&amp;amp;quot;: [
        {
            &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;ticket&amp;amp;quot;,
            &amp;amp;quot;id&amp;amp;quot;: 103,
            &amp;amp;quot;attributes&amp;amp;quot;: {
                &amp;amp;quot;title&amp;amp;quot;: &amp;amp;quot;Replace this title 28 - Test 2&amp;amp;quot;,
                &amp;amp;quot;status&amp;amp;quot;: &amp;amp;quot;A&amp;amp;quot;,
                &amp;amp;quot;created_at&amp;amp;quot;: &amp;amp;quot;2024-05-28T21:38:51.000000Z&amp;amp;quot;,
                &amp;amp;quot;updated_at&amp;amp;quot;: &amp;amp;quot;2024-05-28T21:38:51.000000Z&amp;amp;quot;
            },
            &amp;amp;quot;relationships&amp;amp;quot;: {
                &amp;amp;quot;author&amp;amp;quot;: {
                    &amp;amp;quot;data&amp;amp;quot;: {
                        &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;user&amp;amp;quot;,
                        &amp;amp;quot;id&amp;amp;quot;: 1
                    },
                    &amp;amp;quot;links&amp;amp;quot;: {
                        &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors/1&amp;amp;quot;
                    }
                }
            },
            &amp;amp;quot;links&amp;amp;quot;: {
                &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/tickets/103&amp;amp;quot;
            }
        },
        {
            &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;ticket&amp;amp;quot;,
            &amp;amp;quot;id&amp;amp;quot;: 101,
            &amp;amp;quot;attributes&amp;amp;quot;: {
                &amp;amp;quot;title&amp;amp;quot;: &amp;amp;quot;Replace this title&amp;amp;quot;,
                &amp;amp;quot;status&amp;amp;quot;: &amp;amp;quot;A&amp;amp;quot;,
                &amp;amp;quot;created_at&amp;amp;quot;: &amp;amp;quot;2024-05-28T21:18:59.000000Z&amp;amp;quot;,
                &amp;amp;quot;updated_at&amp;amp;quot;: &amp;amp;quot;2024-05-28T21:18:59.000000Z&amp;amp;quot;
            },
            &amp;amp;quot;relationships&amp;amp;quot;: {
                &amp;amp;quot;author&amp;amp;quot;: {
                    &amp;amp;quot;data&amp;amp;quot;: {
                        &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;user&amp;amp;quot;,
                        &amp;amp;quot;id&amp;amp;quot;: 1
                    },
                    &amp;amp;quot;links&amp;amp;quot;: {
                        &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors/1&amp;amp;quot;
                    }
                }
            },
            &amp;amp;quot;links&amp;amp;quot;: {
                &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/tickets/101&amp;amp;quot;
            }
        },
        {
            &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;ticket&amp;amp;quot;,
            &amp;amp;quot;id&amp;amp;quot;: 3,
            &amp;amp;quot;attributes&amp;amp;quot;: {
                &amp;amp;quot;title&amp;amp;quot;: &amp;amp;quot;consectetur modi in&amp;amp;quot;,
                &amp;amp;quot;status&amp;amp;quot;: &amp;amp;quot;H&amp;amp;quot;,
                &amp;amp;quot;created_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;,
                &amp;amp;quot;updated_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;
            },
            &amp;amp;quot;relationships&amp;amp;quot;: {
                &amp;amp;quot;author&amp;amp;quot;: {
                    &amp;amp;quot;data&amp;amp;quot;: {
                        &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;user&amp;amp;quot;,
                        &amp;amp;quot;id&amp;amp;quot;: 2
                    },
                    &amp;amp;quot;links&amp;amp;quot;: {
                        &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors/2&amp;amp;quot;
                    }
                }
            },
            &amp;amp;quot;links&amp;amp;quot;: {
                &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/tickets/3&amp;amp;quot;
            }
        },
        {
            &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;ticket&amp;amp;quot;,
            &amp;amp;quot;id&amp;amp;quot;: 4,
            &amp;amp;quot;attributes&amp;amp;quot;: {
                &amp;amp;quot;title&amp;amp;quot;: &amp;amp;quot;harum similique rerum&amp;amp;quot;,
                &amp;amp;quot;status&amp;amp;quot;: &amp;amp;quot;C&amp;amp;quot;,
                &amp;amp;quot;created_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;,
                &amp;amp;quot;updated_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;
            },
            &amp;amp;quot;relationships&amp;amp;quot;: {
                &amp;amp;quot;author&amp;amp;quot;: {
                    &amp;amp;quot;data&amp;amp;quot;: {
                        &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;user&amp;amp;quot;,
                        &amp;amp;quot;id&amp;amp;quot;: 8
                    },
                    &amp;amp;quot;links&amp;amp;quot;: {
                        &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors/8&amp;amp;quot;
                    }
                }
            },
            &amp;amp;quot;links&amp;amp;quot;: {
                &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/tickets/4&amp;amp;quot;
            }
        },
        {
            &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;ticket&amp;amp;quot;,
            &amp;amp;quot;id&amp;amp;quot;: 5,
            &amp;amp;quot;attributes&amp;amp;quot;: {
                &amp;amp;quot;title&amp;amp;quot;: &amp;amp;quot;et maiores repellendus&amp;amp;quot;,
                &amp;amp;quot;status&amp;amp;quot;: &amp;amp;quot;X&amp;amp;quot;,
                &amp;amp;quot;created_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;,
                &amp;amp;quot;updated_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;
            },
            &amp;amp;quot;relationships&amp;amp;quot;: {
                &amp;amp;quot;author&amp;amp;quot;: {
                    &amp;amp;quot;data&amp;amp;quot;: {
                        &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;user&amp;amp;quot;,
                        &amp;amp;quot;id&amp;amp;quot;: 2
                    },
                    &amp;amp;quot;links&amp;amp;quot;: {
                        &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors/2&amp;amp;quot;
                    }
                }
            },
            &amp;amp;quot;links&amp;amp;quot;: {
                &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/tickets/5&amp;amp;quot;
            }
        },
        {
            &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;ticket&amp;amp;quot;,
            &amp;amp;quot;id&amp;amp;quot;: 6,
            &amp;amp;quot;attributes&amp;amp;quot;: {
                &amp;amp;quot;title&amp;amp;quot;: &amp;amp;quot;Changed title 29 may&amp;amp;quot;,
                &amp;amp;quot;status&amp;amp;quot;: &amp;amp;quot;C&amp;amp;quot;,
                &amp;amp;quot;created_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;,
                &amp;amp;quot;updated_at&amp;amp;quot;: &amp;amp;quot;2024-05-29T22:50:36.000000Z&amp;amp;quot;
            },
            &amp;amp;quot;relationships&amp;amp;quot;: {
                &amp;amp;quot;author&amp;amp;quot;: {
                    &amp;amp;quot;data&amp;amp;quot;: {
                        &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;user&amp;amp;quot;,
                        &amp;amp;quot;id&amp;amp;quot;: 2
                    },
                    &amp;amp;quot;links&amp;amp;quot;: {
                        &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors/2&amp;amp;quot;
                    }
                }
            },
            &amp;amp;quot;links&amp;amp;quot;: {
                &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/tickets/6&amp;amp;quot;
            }
        },
        {
            &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;ticket&amp;amp;quot;,
            &amp;amp;quot;id&amp;amp;quot;: 7,
            &amp;amp;quot;attributes&amp;amp;quot;: {
                &amp;amp;quot;title&amp;amp;quot;: &amp;amp;quot;qui adipisci qui&amp;amp;quot;,
                &amp;amp;quot;status&amp;amp;quot;: &amp;amp;quot;X&amp;amp;quot;,
                &amp;amp;quot;created_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;,
                &amp;amp;quot;updated_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;
            },
            &amp;amp;quot;relationships&amp;amp;quot;: {
                &amp;amp;quot;author&amp;amp;quot;: {
                    &amp;amp;quot;data&amp;amp;quot;: {
                        &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;user&amp;amp;quot;,
                        &amp;amp;quot;id&amp;amp;quot;: 8
                    },
                    &amp;amp;quot;links&amp;amp;quot;: {
                        &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors/8&amp;amp;quot;
                    }
                }
            },
            &amp;amp;quot;links&amp;amp;quot;: {
                &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/tickets/7&amp;amp;quot;
            }
        },
        {
            &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;ticket&amp;amp;quot;,
            &amp;amp;quot;id&amp;amp;quot;: 8,
            &amp;amp;quot;attributes&amp;amp;quot;: {
                &amp;amp;quot;title&amp;amp;quot;: &amp;amp;quot;dolores voluptas dolorem&amp;amp;quot;,
                &amp;amp;quot;status&amp;amp;quot;: &amp;amp;quot;C&amp;amp;quot;,
                &amp;amp;quot;created_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;,
                &amp;amp;quot;updated_at&amp;amp;quot;: &amp;amp;quot;2024-05-29T22:54:03.000000Z&amp;amp;quot;
            },
            &amp;amp;quot;relationships&amp;amp;quot;: {
                &amp;amp;quot;author&amp;amp;quot;: {
                    &amp;amp;quot;data&amp;amp;quot;: {
                        &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;user&amp;amp;quot;,
                        &amp;amp;quot;id&amp;amp;quot;: 3
                    },
                    &amp;amp;quot;links&amp;amp;quot;: {
                        &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors/3&amp;amp;quot;
                    }
                }
            },
            &amp;amp;quot;links&amp;amp;quot;: {
                &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/tickets/8&amp;amp;quot;
            }
        },
        {
            &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;ticket&amp;amp;quot;,
            &amp;amp;quot;id&amp;amp;quot;: 9,
            &amp;amp;quot;attributes&amp;amp;quot;: {
                &amp;amp;quot;title&amp;amp;quot;: &amp;amp;quot;repudiandae sunt est&amp;amp;quot;,
                &amp;amp;quot;status&amp;amp;quot;: &amp;amp;quot;X&amp;amp;quot;,
                &amp;amp;quot;created_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;,
                &amp;amp;quot;updated_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;
            },
            &amp;amp;quot;relationships&amp;amp;quot;: {
                &amp;amp;quot;author&amp;amp;quot;: {
                    &amp;amp;quot;data&amp;amp;quot;: {
                        &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;user&amp;amp;quot;,
                        &amp;amp;quot;id&amp;amp;quot;: 6
                    },
                    &amp;amp;quot;links&amp;amp;quot;: {
                        &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors/6&amp;amp;quot;
                    }
                }
            },
            &amp;amp;quot;links&amp;amp;quot;: {
                &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/tickets/9&amp;amp;quot;
            }
        },
        {
            &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;ticket&amp;amp;quot;,
            &amp;amp;quot;id&amp;amp;quot;: 10,
            &amp;amp;quot;attributes&amp;amp;quot;: {
                &amp;amp;quot;title&amp;amp;quot;: &amp;amp;quot;eveniet architecto recusandae&amp;amp;quot;,
                &amp;amp;quot;status&amp;amp;quot;: &amp;amp;quot;H&amp;amp;quot;,
                &amp;amp;quot;created_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;,
                &amp;amp;quot;updated_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;
            },
            &amp;amp;quot;relationships&amp;amp;quot;: {
                &amp;amp;quot;author&amp;amp;quot;: {
                    &amp;amp;quot;data&amp;amp;quot;: {
                        &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;user&amp;amp;quot;,
                        &amp;amp;quot;id&amp;amp;quot;: 8
                    },
                    &amp;amp;quot;links&amp;amp;quot;: {
                        &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors/8&amp;amp;quot;
                    }
                }
            },
            &amp;amp;quot;links&amp;amp;quot;: {
                &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/tickets/10&amp;amp;quot;
            }
        },
        {
            &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;ticket&amp;amp;quot;,
            &amp;amp;quot;id&amp;amp;quot;: 11,
            &amp;amp;quot;attributes&amp;amp;quot;: {
                &amp;amp;quot;title&amp;amp;quot;: &amp;amp;quot;recusandae dolore nihil&amp;amp;quot;,
                &amp;amp;quot;status&amp;amp;quot;: &amp;amp;quot;A&amp;amp;quot;,
                &amp;amp;quot;created_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;,
                &amp;amp;quot;updated_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;
            },
            &amp;amp;quot;relationships&amp;amp;quot;: {
                &amp;amp;quot;author&amp;amp;quot;: {
                    &amp;amp;quot;data&amp;amp;quot;: {
                        &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;user&amp;amp;quot;,
                        &amp;amp;quot;id&amp;amp;quot;: 5
                    },
                    &amp;amp;quot;links&amp;amp;quot;: {
                        &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors/5&amp;amp;quot;
                    }
                }
            },
            &amp;amp;quot;links&amp;amp;quot;: {
                &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/tickets/11&amp;amp;quot;
            }
        },
        {
            &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;ticket&amp;amp;quot;,
            &amp;amp;quot;id&amp;amp;quot;: 12,
            &amp;amp;quot;attributes&amp;amp;quot;: {
                &amp;amp;quot;title&amp;amp;quot;: &amp;amp;quot;odio quia quae&amp;amp;quot;,
                &amp;amp;quot;status&amp;amp;quot;: &amp;amp;quot;H&amp;amp;quot;,
                &amp;amp;quot;created_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;,
                &amp;amp;quot;updated_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;
            },
            &amp;amp;quot;relationships&amp;amp;quot;: {
                &amp;amp;quot;author&amp;amp;quot;: {
                    &amp;amp;quot;data&amp;amp;quot;: {
                        &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;user&amp;amp;quot;,
                        &amp;amp;quot;id&amp;amp;quot;: 8
                    },
                    &amp;amp;quot;links&amp;amp;quot;: {
                        &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors/8&amp;amp;quot;
                    }
                }
            },
            &amp;amp;quot;links&amp;amp;quot;: {
                &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/tickets/12&amp;amp;quot;
            }
        },
        {
            &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;ticket&amp;amp;quot;,
            &amp;amp;quot;id&amp;amp;quot;: 13,
            &amp;amp;quot;attributes&amp;amp;quot;: {
                &amp;amp;quot;title&amp;amp;quot;: &amp;amp;quot;nisi nobis eaque&amp;amp;quot;,
                &amp;amp;quot;status&amp;amp;quot;: &amp;amp;quot;A&amp;amp;quot;,
                &amp;amp;quot;created_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;,
                &amp;amp;quot;updated_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;
            },
            &amp;amp;quot;relationships&amp;amp;quot;: {
                &amp;amp;quot;author&amp;amp;quot;: {
                    &amp;amp;quot;data&amp;amp;quot;: {
                        &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;user&amp;amp;quot;,
                        &amp;amp;quot;id&amp;amp;quot;: 6
                    },
                    &amp;amp;quot;links&amp;amp;quot;: {
                        &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors/6&amp;amp;quot;
                    }
                }
            },
            &amp;amp;quot;links&amp;amp;quot;: {
                &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/tickets/13&amp;amp;quot;
            }
        },
        {
            &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;ticket&amp;amp;quot;,
            &amp;amp;quot;id&amp;amp;quot;: 14,
            &amp;amp;quot;attributes&amp;amp;quot;: {
                &amp;amp;quot;title&amp;amp;quot;: &amp;amp;quot;asperiores doloremque qui&amp;amp;quot;,
                &amp;amp;quot;status&amp;amp;quot;: &amp;amp;quot;A&amp;amp;quot;,
                &amp;amp;quot;created_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;,
                &amp;amp;quot;updated_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;
            },
            &amp;amp;quot;relationships&amp;amp;quot;: {
                &amp;amp;quot;author&amp;amp;quot;: {
                    &amp;amp;quot;data&amp;amp;quot;: {
                        &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;user&amp;amp;quot;,
                        &amp;amp;quot;id&amp;amp;quot;: 4
                    },
                    &amp;amp;quot;links&amp;amp;quot;: {
                        &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors/4&amp;amp;quot;
                    }
                }
            },
            &amp;amp;quot;links&amp;amp;quot;: {
                &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/tickets/14&amp;amp;quot;
            }
        },
        {
            &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;ticket&amp;amp;quot;,
            &amp;amp;quot;id&amp;amp;quot;: 15,
            &amp;amp;quot;attributes&amp;amp;quot;: {
                &amp;amp;quot;title&amp;amp;quot;: &amp;amp;quot;odio officiis est&amp;amp;quot;,
                &amp;amp;quot;status&amp;amp;quot;: &amp;amp;quot;A&amp;amp;quot;,
                &amp;amp;quot;created_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;,
                &amp;amp;quot;updated_at&amp;amp;quot;: &amp;amp;quot;2024-05-15T22:36:40.000000Z&amp;amp;quot;
            },
            &amp;amp;quot;relationships&amp;amp;quot;: {
                &amp;amp;quot;author&amp;amp;quot;: {
                    &amp;amp;quot;data&amp;amp;quot;: {
                        &amp;amp;quot;type&amp;amp;quot;: &amp;amp;quot;user&amp;amp;quot;,
                        &amp;amp;quot;id&amp;amp;quot;: 6
                    },
                    &amp;amp;quot;links&amp;amp;quot;: {
                        &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/authors/6&amp;amp;quot;
                    }
                }
            },
            &amp;amp;quot;links&amp;amp;quot;: {
                &amp;amp;quot;self&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/tickets/15&amp;amp;quot;
            }
        }
    ],
    &amp;amp;quot;links&amp;amp;quot;: {
        &amp;amp;quot;first&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/tickets?page=1&amp;amp;quot;,
        &amp;amp;quot;last&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/tickets?page=7&amp;amp;quot;,
        &amp;amp;quot;prev&amp;amp;quot;: null,
        &amp;amp;quot;next&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/tickets?page=2&amp;amp;quot;
    },
    &amp;amp;quot;meta&amp;amp;quot;: {
        &amp;amp;quot;current_page&amp;amp;quot;: 1,
        &amp;amp;quot;from&amp;amp;quot;: 1,
        &amp;amp;quot;last_page&amp;amp;quot;: 7,
        &amp;amp;quot;links&amp;amp;quot;: [
            {
                &amp;amp;quot;url&amp;amp;quot;: null,
                &amp;amp;quot;label&amp;amp;quot;: &amp;amp;quot;&amp;amp;amp;laquo; Previous&amp;amp;quot;,
                &amp;amp;quot;active&amp;amp;quot;: false
            },
            {
                &amp;amp;quot;url&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/tickets?page=1&amp;amp;quot;,
                &amp;amp;quot;label&amp;amp;quot;: &amp;amp;quot;1&amp;amp;quot;,
                &amp;amp;quot;active&amp;amp;quot;: true
            },
            {
                &amp;amp;quot;url&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/tickets?page=2&amp;amp;quot;,
                &amp;amp;quot;label&amp;amp;quot;: &amp;amp;quot;2&amp;amp;quot;,
                &amp;amp;quot;active&amp;amp;quot;: false
            },
            {
                &amp;amp;quot;url&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/tickets?page=3&amp;amp;quot;,
                &amp;amp;quot;label&amp;amp;quot;: &amp;amp;quot;3&amp;amp;quot;,
                &amp;amp;quot;active&amp;amp;quot;: false
            },
            {
                &amp;amp;quot;url&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/tickets?page=4&amp;amp;quot;,
                &amp;amp;quot;label&amp;amp;quot;: &amp;amp;quot;4&amp;amp;quot;,
                &amp;amp;quot;active&amp;amp;quot;: false
            },
            {
                &amp;amp;quot;url&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/tickets?page=5&amp;amp;quot;,
                &amp;amp;quot;label&amp;amp;quot;: &amp;amp;quot;5&amp;amp;quot;,
                &amp;amp;quot;active&amp;amp;quot;: false
            },
            {
                &amp;amp;quot;url&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/tickets?page=6&amp;amp;quot;,
                &amp;amp;quot;label&amp;amp;quot;: &amp;amp;quot;6&amp;amp;quot;,
                &amp;amp;quot;active&amp;amp;quot;: false
            },
            {
                &amp;amp;quot;url&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/tickets?page=7&amp;amp;quot;,
                &amp;amp;quot;label&amp;amp;quot;: &amp;amp;quot;7&amp;amp;quot;,
                &amp;amp;quot;active&amp;amp;quot;: false
            },
            {
                &amp;amp;quot;url&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/tickets?page=2&amp;amp;quot;,
                &amp;amp;quot;label&amp;amp;quot;: &amp;amp;quot;Next &amp;amp;amp;raquo;&amp;amp;quot;,
                &amp;amp;quot;active&amp;amp;quot;: false
            }
        ],
        &amp;amp;quot;path&amp;amp;quot;: &amp;amp;quot;http://tickets-api.test/api/v1/tickets&amp;amp;quot;,
        &amp;amp;quot;per_page&amp;amp;quot;: 15,
        &amp;amp;quot;to&amp;amp;quot;: 15,
        &amp;amp;quot;total&amp;amp;quot;: 101
    }
}&amp;lt;/code&amp;gt;
 &amp;lt;/pre&amp;gt;
    &amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-results-GETapi-v1-tickets&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Received response&amp;lt;span
                id=&amp;quot;execution-response-status-GETapi-v1-tickets&amp;quot;&amp;gt;&amp;lt;/span&amp;gt;:
    &amp;lt;/blockquote&amp;gt;
    &amp;lt;pre class=&amp;quot;json&amp;quot;&amp;gt;&amp;lt;code id=&amp;quot;execution-response-content-GETapi-v1-tickets&amp;quot;
      data-empty-response-text=&amp;quot;&amp;lt;Empty response&amp;gt;&amp;quot; style=&amp;quot;max-height: 400px;&amp;quot;&amp;gt;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-error-GETapi-v1-tickets&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Request failed with error:&amp;lt;/blockquote&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code id=&amp;quot;execution-error-message-GETapi-v1-tickets&amp;quot;&amp;gt;

Tip: Check that you&amp;amp;#039;re properly connected to the network.
If you&amp;amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;form id=&amp;quot;form-GETapi-v1-tickets&amp;quot; data-method=&amp;quot;GET&amp;quot;
      data-path=&amp;quot;api/v1/tickets&amp;quot;
      data-authed=&amp;quot;1&amp;quot;
      data-hasfiles=&amp;quot;0&amp;quot;
      data-isarraybody=&amp;quot;0&amp;quot;
      autocomplete=&amp;quot;off&amp;quot;
      onsubmit=&amp;quot;event.preventDefault(); executeTryOut(&amp;#039;GETapi-v1-tickets&amp;#039;, this);&amp;quot;&amp;gt;
    &amp;lt;h3&amp;gt;
        Request&amp;amp;nbsp;&amp;amp;nbsp;&amp;amp;nbsp;
                    &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-tryout-GETapi-v1-tickets&amp;quot;
                    onclick=&amp;quot;tryItOut(&amp;#039;GETapi-v1-tickets&amp;#039;);&amp;quot;&amp;gt;Try it out ⚡
            &amp;lt;/button&amp;gt;
            &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-canceltryout-GETapi-v1-tickets&amp;quot;
                    onclick=&amp;quot;cancelTryOut(&amp;#039;GETapi-v1-tickets&amp;#039;);&amp;quot; hidden&amp;gt;Cancel 🛑
            &amp;lt;/button&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
            &amp;lt;button type=&amp;quot;submit&amp;quot;
                    style=&amp;quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-executetryout-GETapi-v1-tickets&amp;quot;
                    data-initial-text=&amp;quot;Send Request 💥&amp;quot;
                    data-loading-text=&amp;quot;⏱ Sending...&amp;quot;
                    hidden&amp;gt;Send Request 💥
            &amp;lt;/button&amp;gt;
            &amp;lt;/h3&amp;gt;
            &amp;lt;p&amp;gt;
            &amp;lt;small class=&amp;quot;badge badge-green&amp;quot;&amp;gt;GET&amp;lt;/small&amp;gt;
            &amp;lt;b&amp;gt;&amp;lt;code&amp;gt;api/v1/tickets&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;
        &amp;lt;/p&amp;gt;
                &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;Headers&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Authorization&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Authorization&amp;quot; class=&amp;quot;auth-value&amp;quot;               data-endpoint=&amp;quot;GETapi-v1-tickets&amp;quot;
               value=&amp;quot;Bearer {YOUR_AUTH_KEY}&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;Bearer {YOUR_AUTH_KEY}&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Content-Type&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Content-Type&amp;quot;                data-endpoint=&amp;quot;GETapi-v1-tickets&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Accept&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Accept&amp;quot;                data-endpoint=&amp;quot;GETapi-v1-tickets&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                            &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;Query Parameters&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                                    &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;sort&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;string&amp;lt;/small&amp;gt;&amp;amp;nbsp;
&amp;lt;i&amp;gt;optional&amp;lt;/i&amp;gt; &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;sort&amp;quot;                data-endpoint=&amp;quot;GETapi-v1-tickets&amp;quot;
               value=&amp;quot;sort=title,-created_at&amp;quot;
               data-component=&amp;quot;query&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Data field(s) to sort by. Separate multiple values with a commas. Denote descending order with a dash (-). Example: &amp;lt;code&amp;gt;sort=title,-created_at&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                    &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;filter[status]&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;string&amp;lt;/small&amp;gt;&amp;amp;nbsp;
&amp;lt;i&amp;gt;optional&amp;lt;/i&amp;gt; &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;filter[status]&amp;quot;                data-endpoint=&amp;quot;GETapi-v1-tickets&amp;quot;
               value=&amp;quot;sapiente&amp;quot;
               data-component=&amp;quot;query&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Filter by status code: A, C, H, X. No example Example: &amp;lt;code&amp;gt;sapiente&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                    &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;filter[title]&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;string&amp;lt;/small&amp;gt;&amp;amp;nbsp;
&amp;lt;i&amp;gt;optional&amp;lt;/i&amp;gt; &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;filter[title]&amp;quot;                data-endpoint=&amp;quot;GETapi-v1-tickets&amp;quot;
               value=&amp;quot;filter[title]=*fix*&amp;quot;
               data-component=&amp;quot;query&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Filter by title. Wildcard search is supported. Example: &amp;lt;code&amp;gt;filter[title]=*fix*&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                &amp;lt;/form&amp;gt;

                    &amp;lt;h2 id=&amp;quot;managing-tickets-POSTapi-v1-tickets&amp;quot;&amp;gt;Create a Ticket.&amp;lt;/h2&amp;gt;

&amp;lt;p&amp;gt;
&amp;lt;small class=&amp;quot;badge badge-darkred&amp;quot;&amp;gt;requires authentication&amp;lt;/small&amp;gt;
&amp;lt;/p&amp;gt;

&amp;lt;p&amp;gt;Create a new Ticket. Users can only create tickets for themselves. Managers can create tickets for other users.&amp;lt;/p&amp;gt;

&amp;lt;span id=&amp;quot;example-requests-POSTapi-v1-tickets&amp;quot;&amp;gt;
&amp;lt;blockquote&amp;gt;Example request:&amp;lt;/blockquote&amp;gt;


&amp;lt;div class=&amp;quot;bash-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-bash&amp;quot;&amp;gt;curl --request POST \
    &amp;quot;http://tickets-api.test/api/v1/tickets&amp;quot; \
    --header &amp;quot;Authorization: Bearer {YOUR_AUTH_KEY}&amp;quot; \
    --header &amp;quot;Content-Type: application/json&amp;quot; \
    --header &amp;quot;Accept: application/json&amp;quot; \
    --data &amp;quot;{
    \&amp;quot;data\&amp;quot;: {
        \&amp;quot;attributes\&amp;quot;: {
            \&amp;quot;title\&amp;quot;: \&amp;quot;No example\&amp;quot;,
            \&amp;quot;description\&amp;quot;: \&amp;quot;Earum ut vero aspernatur necessitatibus est.\&amp;quot;,
            \&amp;quot;status\&amp;quot;: \&amp;quot;X\&amp;quot;
        },
        \&amp;quot;relationships\&amp;quot;: {
            \&amp;quot;author\&amp;quot;: {
                \&amp;quot;data\&amp;quot;: {
                    \&amp;quot;id\&amp;quot;: 0
                }
            }
        }
    }
}&amp;quot;
&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;


&amp;lt;div class=&amp;quot;javascript-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-javascript&amp;quot;&amp;gt;const url = new URL(
    &amp;quot;http://tickets-api.test/api/v1/tickets&amp;quot;
);

const headers = {
    &amp;quot;Authorization&amp;quot;: &amp;quot;Bearer {YOUR_AUTH_KEY}&amp;quot;,
    &amp;quot;Content-Type&amp;quot;: &amp;quot;application/json&amp;quot;,
    &amp;quot;Accept&amp;quot;: &amp;quot;application/json&amp;quot;,
};

let body = {
    &amp;quot;data&amp;quot;: {
        &amp;quot;attributes&amp;quot;: {
            &amp;quot;title&amp;quot;: &amp;quot;No example&amp;quot;,
            &amp;quot;description&amp;quot;: &amp;quot;Earum ut vero aspernatur necessitatibus est.&amp;quot;,
            &amp;quot;status&amp;quot;: &amp;quot;X&amp;quot;
        },
        &amp;quot;relationships&amp;quot;: {
            &amp;quot;author&amp;quot;: {
                &amp;quot;data&amp;quot;: {
                    &amp;quot;id&amp;quot;: 0
                }
            }
        }
    }
};

fetch(url, {
    method: &amp;quot;POST&amp;quot;,
    headers,
    body: JSON.stringify(body),
}).then(response =&amp;amp;gt; response.json());&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;

&amp;lt;/span&amp;gt;

&amp;lt;span id=&amp;quot;example-responses-POSTapi-v1-tickets&amp;quot;&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-results-POSTapi-v1-tickets&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Received response&amp;lt;span
                id=&amp;quot;execution-response-status-POSTapi-v1-tickets&amp;quot;&amp;gt;&amp;lt;/span&amp;gt;:
    &amp;lt;/blockquote&amp;gt;
    &amp;lt;pre class=&amp;quot;json&amp;quot;&amp;gt;&amp;lt;code id=&amp;quot;execution-response-content-POSTapi-v1-tickets&amp;quot;
      data-empty-response-text=&amp;quot;&amp;lt;Empty response&amp;gt;&amp;quot; style=&amp;quot;max-height: 400px;&amp;quot;&amp;gt;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-error-POSTapi-v1-tickets&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Request failed with error:&amp;lt;/blockquote&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code id=&amp;quot;execution-error-message-POSTapi-v1-tickets&amp;quot;&amp;gt;

Tip: Check that you&amp;amp;#039;re properly connected to the network.
If you&amp;amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;form id=&amp;quot;form-POSTapi-v1-tickets&amp;quot; data-method=&amp;quot;POST&amp;quot;
      data-path=&amp;quot;api/v1/tickets&amp;quot;
      data-authed=&amp;quot;1&amp;quot;
      data-hasfiles=&amp;quot;0&amp;quot;
      data-isarraybody=&amp;quot;0&amp;quot;
      autocomplete=&amp;quot;off&amp;quot;
      onsubmit=&amp;quot;event.preventDefault(); executeTryOut(&amp;#039;POSTapi-v1-tickets&amp;#039;, this);&amp;quot;&amp;gt;
    &amp;lt;h3&amp;gt;
        Request&amp;amp;nbsp;&amp;amp;nbsp;&amp;amp;nbsp;
                    &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-tryout-POSTapi-v1-tickets&amp;quot;
                    onclick=&amp;quot;tryItOut(&amp;#039;POSTapi-v1-tickets&amp;#039;);&amp;quot;&amp;gt;Try it out ⚡
            &amp;lt;/button&amp;gt;
            &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-canceltryout-POSTapi-v1-tickets&amp;quot;
                    onclick=&amp;quot;cancelTryOut(&amp;#039;POSTapi-v1-tickets&amp;#039;);&amp;quot; hidden&amp;gt;Cancel 🛑
            &amp;lt;/button&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
            &amp;lt;button type=&amp;quot;submit&amp;quot;
                    style=&amp;quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-executetryout-POSTapi-v1-tickets&amp;quot;
                    data-initial-text=&amp;quot;Send Request 💥&amp;quot;
                    data-loading-text=&amp;quot;⏱ Sending...&amp;quot;
                    hidden&amp;gt;Send Request 💥
            &amp;lt;/button&amp;gt;
            &amp;lt;/h3&amp;gt;
            &amp;lt;p&amp;gt;
            &amp;lt;small class=&amp;quot;badge badge-black&amp;quot;&amp;gt;POST&amp;lt;/small&amp;gt;
            &amp;lt;b&amp;gt;&amp;lt;code&amp;gt;api/v1/tickets&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;
        &amp;lt;/p&amp;gt;
                &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;Headers&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Authorization&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Authorization&amp;quot; class=&amp;quot;auth-value&amp;quot;               data-endpoint=&amp;quot;POSTapi-v1-tickets&amp;quot;
               value=&amp;quot;Bearer {YOUR_AUTH_KEY}&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;Bearer {YOUR_AUTH_KEY}&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Content-Type&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Content-Type&amp;quot;                data-endpoint=&amp;quot;POSTapi-v1-tickets&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Accept&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Accept&amp;quot;                data-endpoint=&amp;quot;POSTapi-v1-tickets&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;Body Parameters&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
        &amp;lt;div style=&amp;quot; padding-left: 28px;  clear: unset;&amp;quot;&amp;gt;
        &amp;lt;details&amp;gt;
            &amp;lt;summary style=&amp;quot;padding-bottom: 10px;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;data&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;object&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
&amp;lt;br&amp;gt;

            &amp;lt;/summary&amp;gt;
                                                &amp;lt;div style=&amp;quot; margin-left: 14px; clear: unset;&amp;quot;&amp;gt;
        &amp;lt;details&amp;gt;
            &amp;lt;summary style=&amp;quot;padding-bottom: 10px;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;attributes&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;object&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
&amp;lt;br&amp;gt;

            &amp;lt;/summary&amp;gt;
                                                &amp;lt;div style=&amp;quot;margin-left: 28px; clear: unset;&amp;quot;&amp;gt;
                        &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;title&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;string&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;data.attributes.title&amp;quot;                data-endpoint=&amp;quot;POSTapi-v1-tickets&amp;quot;
               value=&amp;quot;No example&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;The title of the ticket --. Example: &amp;lt;code&amp;gt;No example&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
                    &amp;lt;/div&amp;gt;
                                                                &amp;lt;div style=&amp;quot;margin-left: 28px; clear: unset;&amp;quot;&amp;gt;
                        &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;description&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;string&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;data.attributes.description&amp;quot;                data-endpoint=&amp;quot;POSTapi-v1-tickets&amp;quot;
               value=&amp;quot;Earum ut vero aspernatur necessitatibus est.&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;The description of the ticket. Example: &amp;lt;code&amp;gt;Earum ut vero aspernatur necessitatibus est.&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
                    &amp;lt;/div&amp;gt;
                                                                &amp;lt;div style=&amp;quot;margin-left: 28px; clear: unset;&amp;quot;&amp;gt;
                        &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;status&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;string&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;data.attributes.status&amp;quot;                data-endpoint=&amp;quot;POSTapi-v1-tickets&amp;quot;
               value=&amp;quot;X&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;The status of the ticket. Example: &amp;lt;code&amp;gt;X&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
Must be one of:
&amp;lt;ul style=&amp;quot;list-style-type: square;&amp;quot;&amp;gt;&amp;lt;li&amp;gt;&amp;lt;code&amp;gt;A&amp;lt;/code&amp;gt;&amp;lt;/li&amp;gt; &amp;lt;li&amp;gt;&amp;lt;code&amp;gt;C&amp;lt;/code&amp;gt;&amp;lt;/li&amp;gt; &amp;lt;li&amp;gt;&amp;lt;code&amp;gt;H&amp;lt;/code&amp;gt;&amp;lt;/li&amp;gt; &amp;lt;li&amp;gt;&amp;lt;code&amp;gt;X&amp;lt;/code&amp;gt;&amp;lt;/li&amp;gt;&amp;lt;/ul&amp;gt;
                    &amp;lt;/div&amp;gt;
                                    &amp;lt;/details&amp;gt;
        &amp;lt;/div&amp;gt;
                                                                    &amp;lt;div style=&amp;quot; margin-left: 14px; clear: unset;&amp;quot;&amp;gt;
        &amp;lt;details&amp;gt;
            &amp;lt;summary style=&amp;quot;padding-bottom: 10px;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;relationships&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;object&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
&amp;lt;br&amp;gt;

            &amp;lt;/summary&amp;gt;
                                                &amp;lt;div style=&amp;quot; margin-left: 28px; clear: unset;&amp;quot;&amp;gt;
        &amp;lt;details&amp;gt;
            &amp;lt;summary style=&amp;quot;padding-bottom: 10px;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;author&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;object&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
&amp;lt;br&amp;gt;

            &amp;lt;/summary&amp;gt;
                                                &amp;lt;div style=&amp;quot; margin-left: 42px; clear: unset;&amp;quot;&amp;gt;
        &amp;lt;details&amp;gt;
            &amp;lt;summary style=&amp;quot;padding-bottom: 10px;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;data&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;object&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
&amp;lt;br&amp;gt;

            &amp;lt;/summary&amp;gt;
                                                &amp;lt;div style=&amp;quot;margin-left: 56px; clear: unset;&amp;quot;&amp;gt;
                        &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;id&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;integer&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;number&amp;quot; style=&amp;quot;display: none&amp;quot;
               step=&amp;quot;any&amp;quot;               name=&amp;quot;data.relationships.author.data.id&amp;quot;                data-endpoint=&amp;quot;POSTapi-v1-tickets&amp;quot;
               value=&amp;quot;0&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;The id of the author of the ticket. Must be 13. Example: &amp;lt;code&amp;gt;0&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
                    &amp;lt;/div&amp;gt;
                                    &amp;lt;/details&amp;gt;
        &amp;lt;/div&amp;gt;
                                        &amp;lt;/details&amp;gt;
        &amp;lt;/div&amp;gt;
                                        &amp;lt;/details&amp;gt;
        &amp;lt;/div&amp;gt;
                                        &amp;lt;/details&amp;gt;
        &amp;lt;/div&amp;gt;
        &amp;lt;/form&amp;gt;

            

        
    &amp;lt;/div&amp;gt;
    &amp;lt;div class=&amp;quot;dark-box&amp;quot;&amp;gt;
                    &amp;lt;div class=&amp;quot;lang-selector&amp;quot;&amp;gt;
                                                        &amp;lt;button type=&amp;quot;button&amp;quot; class=&amp;quot;lang-button&amp;quot; data-language-name=&amp;quot;bash&amp;quot;&amp;gt;bash&amp;lt;/button&amp;gt;
                                                        &amp;lt;button type=&amp;quot;button&amp;quot; class=&amp;quot;lang-button&amp;quot; data-language-name=&amp;quot;javascript&amp;quot;&amp;gt;javascript&amp;lt;/button&amp;gt;
                            &amp;lt;/div&amp;gt;
            &amp;lt;/div&amp;gt;
&amp;lt;/div&amp;gt;
&amp;lt;/body&amp;gt;
&amp;lt;/html&amp;gt;
&lt;/code&gt;
 &lt;/pre&gt;
    &lt;/span&gt;
&lt;span id=&quot;execution-results-GETapi-docs-v1&quot; hidden&gt;
    &lt;blockquote&gt;Received response&lt;span
                id=&quot;execution-response-status-GETapi-docs-v1&quot;&gt;&lt;/span&gt;:
    &lt;/blockquote&gt;
    &lt;pre class=&quot;json&quot;&gt;&lt;code id=&quot;execution-response-content-GETapi-docs-v1&quot;
      data-empty-response-text=&quot;&lt;Empty response&gt;&quot; style=&quot;max-height: 400px;&quot;&gt;&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-error-GETapi-docs-v1&quot; hidden&gt;
    &lt;blockquote&gt;Request failed with error:&lt;/blockquote&gt;
    &lt;pre&gt;&lt;code id=&quot;execution-error-message-GETapi-docs-v1&quot;&gt;

Tip: Check that you&amp;#039;re properly connected to the network.
If you&amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;form id=&quot;form-GETapi-docs-v1&quot; data-method=&quot;GET&quot;
      data-path=&quot;api/docs/v1&quot;
      data-authed=&quot;1&quot;
      data-hasfiles=&quot;0&quot;
      data-isarraybody=&quot;0&quot;
      autocomplete=&quot;off&quot;
      onsubmit=&quot;event.preventDefault(); executeTryOut(&#039;GETapi-docs-v1&#039;, this);&quot;&gt;
    &lt;h3&gt;
        Request&amp;nbsp;&amp;nbsp;&amp;nbsp;
                    &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-tryout-GETapi-docs-v1&quot;
                    onclick=&quot;tryItOut(&#039;GETapi-docs-v1&#039;);&quot;&gt;Try it out ⚡
            &lt;/button&gt;
            &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-canceltryout-GETapi-docs-v1&quot;
                    onclick=&quot;cancelTryOut(&#039;GETapi-docs-v1&#039;);&quot; hidden&gt;Cancel 🛑
            &lt;/button&gt;&amp;nbsp;&amp;nbsp;
            &lt;button type=&quot;submit&quot;
                    style=&quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-executetryout-GETapi-docs-v1&quot;
                    data-initial-text=&quot;Send Request 💥&quot;
                    data-loading-text=&quot;⏱ Sending...&quot;
                    hidden&gt;Send Request 💥
            &lt;/button&gt;
            &lt;/h3&gt;
            &lt;p&gt;
            &lt;small class=&quot;badge badge-green&quot;&gt;GET&lt;/small&gt;
            &lt;b&gt;&lt;code&gt;api/docs/v1&lt;/code&gt;&lt;/b&gt;
        &lt;/p&gt;
                &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Headers&lt;/b&gt;&lt;/h4&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Authorization&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Authorization&quot; class=&quot;auth-value&quot;               data-endpoint=&quot;GETapi-docs-v1&quot;
               value=&quot;Bearer {YOUR_AUTH_KEY}&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;Bearer {YOUR_AUTH_KEY}&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Content-Type&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Content-Type&quot;                data-endpoint=&quot;GETapi-docs-v1&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Accept&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Accept&quot;                data-endpoint=&quot;GETapi-docs-v1&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                        &lt;/form&gt;

                    &lt;h2 id=&quot;endpoints-GETapi-v1-tickets--id-&quot;&gt;Display the specified resource.&lt;/h2&gt;

&lt;p&gt;
&lt;small class=&quot;badge badge-darkred&quot;&gt;requires authentication&lt;/small&gt;
&lt;/p&gt;



&lt;span id=&quot;example-requests-GETapi-v1-tickets--id-&quot;&gt;
&lt;blockquote&gt;Example request:&lt;/blockquote&gt;


&lt;div class=&quot;bash-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-bash&quot;&gt;curl --request GET \
    --get &quot;http://tickets-api.test/api/v1/tickets/1&quot; \
    --header &quot;Authorization: Bearer {YOUR_AUTH_KEY}&quot; \
    --header &quot;Content-Type: application/json&quot; \
    --header &quot;Accept: application/json&quot;&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;


&lt;div class=&quot;javascript-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-javascript&quot;&gt;const url = new URL(
    &quot;http://tickets-api.test/api/v1/tickets/1&quot;
);

const headers = {
    &quot;Authorization&quot;: &quot;Bearer {YOUR_AUTH_KEY}&quot;,
    &quot;Content-Type&quot;: &quot;application/json&quot;,
    &quot;Accept&quot;: &quot;application/json&quot;,
};

fetch(url, {
    method: &quot;GET&quot;,
    headers,
}).then(response =&amp;gt; response.json());&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;

&lt;/span&gt;

&lt;span id=&quot;example-responses-GETapi-v1-tickets--id-&quot;&gt;
            &lt;blockquote&gt;
            &lt;p&gt;Example response (200):&lt;/p&gt;
        &lt;/blockquote&gt;
                &lt;details class=&quot;annotation&quot;&gt;
            &lt;summary style=&quot;cursor: pointer;&quot;&gt;
                &lt;small onclick=&quot;textContent = parentElement.parentElement.open ? &#039;Show headers&#039; : &#039;Hide headers&#039;&quot;&gt;Show headers&lt;/small&gt;
            &lt;/summary&gt;
            &lt;pre&gt;&lt;code class=&quot;language-http&quot;&gt;cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 &lt;/code&gt;&lt;/pre&gt;&lt;/details&gt;         &lt;pre&gt;

&lt;code class=&quot;language-json&quot; style=&quot;max-height: 300px;&quot;&gt;{
    &amp;quot;data&amp;quot;: {
        &amp;quot;type&amp;quot;: &amp;quot;ticket&amp;quot;,
        &amp;quot;id&amp;quot;: 1,
        &amp;quot;attributes&amp;quot;: {
            &amp;quot;title&amp;quot;: &amp;quot;dolor qui optio&amp;quot;,
            &amp;quot;description&amp;quot;: &amp;quot;Praesentium facere qui voluptatibus est. Saepe impedit ratione amet ut. Voluptas perferendis id earum fugit deleniti voluptatem. Debitis delectus molestias dolorem iusto dolores repellat consequuntur corrupti. Sit et accusantium omnis praesentium sit ratione.&amp;quot;,
            &amp;quot;status&amp;quot;: &amp;quot;X&amp;quot;,
            &amp;quot;created_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;,
            &amp;quot;updated_at&amp;quot;: &amp;quot;2024-05-15T22:40:44.000000Z&amp;quot;
        },
        &amp;quot;relationships&amp;quot;: {
            &amp;quot;author&amp;quot;: {
                &amp;quot;data&amp;quot;: {
                    &amp;quot;type&amp;quot;: &amp;quot;user&amp;quot;,
                    &amp;quot;id&amp;quot;: 10
                },
                &amp;quot;links&amp;quot;: {
                    &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors/10&amp;quot;
                }
            }
        },
        &amp;quot;links&amp;quot;: {
            &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/tickets/1&amp;quot;
        }
    }
}&lt;/code&gt;
 &lt;/pre&gt;
    &lt;/span&gt;
&lt;span id=&quot;execution-results-GETapi-v1-tickets--id-&quot; hidden&gt;
    &lt;blockquote&gt;Received response&lt;span
                id=&quot;execution-response-status-GETapi-v1-tickets--id-&quot;&gt;&lt;/span&gt;:
    &lt;/blockquote&gt;
    &lt;pre class=&quot;json&quot;&gt;&lt;code id=&quot;execution-response-content-GETapi-v1-tickets--id-&quot;
      data-empty-response-text=&quot;&lt;Empty response&gt;&quot; style=&quot;max-height: 400px;&quot;&gt;&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-error-GETapi-v1-tickets--id-&quot; hidden&gt;
    &lt;blockquote&gt;Request failed with error:&lt;/blockquote&gt;
    &lt;pre&gt;&lt;code id=&quot;execution-error-message-GETapi-v1-tickets--id-&quot;&gt;

Tip: Check that you&amp;#039;re properly connected to the network.
If you&amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;form id=&quot;form-GETapi-v1-tickets--id-&quot; data-method=&quot;GET&quot;
      data-path=&quot;api/v1/tickets/{id}&quot;
      data-authed=&quot;1&quot;
      data-hasfiles=&quot;0&quot;
      data-isarraybody=&quot;0&quot;
      autocomplete=&quot;off&quot;
      onsubmit=&quot;event.preventDefault(); executeTryOut(&#039;GETapi-v1-tickets--id-&#039;, this);&quot;&gt;
    &lt;h3&gt;
        Request&amp;nbsp;&amp;nbsp;&amp;nbsp;
                    &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-tryout-GETapi-v1-tickets--id-&quot;
                    onclick=&quot;tryItOut(&#039;GETapi-v1-tickets--id-&#039;);&quot;&gt;Try it out ⚡
            &lt;/button&gt;
            &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-canceltryout-GETapi-v1-tickets--id-&quot;
                    onclick=&quot;cancelTryOut(&#039;GETapi-v1-tickets--id-&#039;);&quot; hidden&gt;Cancel 🛑
            &lt;/button&gt;&amp;nbsp;&amp;nbsp;
            &lt;button type=&quot;submit&quot;
                    style=&quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-executetryout-GETapi-v1-tickets--id-&quot;
                    data-initial-text=&quot;Send Request 💥&quot;
                    data-loading-text=&quot;⏱ Sending...&quot;
                    hidden&gt;Send Request 💥
            &lt;/button&gt;
            &lt;/h3&gt;
            &lt;p&gt;
            &lt;small class=&quot;badge badge-green&quot;&gt;GET&lt;/small&gt;
            &lt;b&gt;&lt;code&gt;api/v1/tickets/{id}&lt;/code&gt;&lt;/b&gt;
        &lt;/p&gt;
                &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Headers&lt;/b&gt;&lt;/h4&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Authorization&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Authorization&quot; class=&quot;auth-value&quot;               data-endpoint=&quot;GETapi-v1-tickets--id-&quot;
               value=&quot;Bearer {YOUR_AUTH_KEY}&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;Bearer {YOUR_AUTH_KEY}&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Content-Type&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Content-Type&quot;                data-endpoint=&quot;GETapi-v1-tickets--id-&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Accept&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Accept&quot;                data-endpoint=&quot;GETapi-v1-tickets--id-&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                        &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;URL Parameters&lt;/b&gt;&lt;/h4&gt;
                    &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;id&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;integer&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;number&quot; style=&quot;display: none&quot;
               step=&quot;any&quot;               name=&quot;id&quot;                data-endpoint=&quot;GETapi-v1-tickets--id-&quot;
               value=&quot;1&quot;
               data-component=&quot;url&quot;&gt;
    &lt;br&gt;
&lt;p&gt;The ID of the ticket. Example: &lt;code&gt;1&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                    &lt;/form&gt;

                    &lt;h2 id=&quot;endpoints-DELETEapi-v1-tickets--id-&quot;&gt;Remove the specified resource from storage.&lt;/h2&gt;

&lt;p&gt;
&lt;small class=&quot;badge badge-darkred&quot;&gt;requires authentication&lt;/small&gt;
&lt;/p&gt;



&lt;span id=&quot;example-requests-DELETEapi-v1-tickets--id-&quot;&gt;
&lt;blockquote&gt;Example request:&lt;/blockquote&gt;


&lt;div class=&quot;bash-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-bash&quot;&gt;curl --request DELETE \
    &quot;http://tickets-api.test/api/v1/tickets/1&quot; \
    --header &quot;Authorization: Bearer {YOUR_AUTH_KEY}&quot; \
    --header &quot;Content-Type: application/json&quot; \
    --header &quot;Accept: application/json&quot;&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;


&lt;div class=&quot;javascript-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-javascript&quot;&gt;const url = new URL(
    &quot;http://tickets-api.test/api/v1/tickets/1&quot;
);

const headers = {
    &quot;Authorization&quot;: &quot;Bearer {YOUR_AUTH_KEY}&quot;,
    &quot;Content-Type&quot;: &quot;application/json&quot;,
    &quot;Accept&quot;: &quot;application/json&quot;,
};

fetch(url, {
    method: &quot;DELETE&quot;,
    headers,
}).then(response =&amp;gt; response.json());&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;

&lt;/span&gt;

&lt;span id=&quot;example-responses-DELETEapi-v1-tickets--id-&quot;&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-results-DELETEapi-v1-tickets--id-&quot; hidden&gt;
    &lt;blockquote&gt;Received response&lt;span
                id=&quot;execution-response-status-DELETEapi-v1-tickets--id-&quot;&gt;&lt;/span&gt;:
    &lt;/blockquote&gt;
    &lt;pre class=&quot;json&quot;&gt;&lt;code id=&quot;execution-response-content-DELETEapi-v1-tickets--id-&quot;
      data-empty-response-text=&quot;&lt;Empty response&gt;&quot; style=&quot;max-height: 400px;&quot;&gt;&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-error-DELETEapi-v1-tickets--id-&quot; hidden&gt;
    &lt;blockquote&gt;Request failed with error:&lt;/blockquote&gt;
    &lt;pre&gt;&lt;code id=&quot;execution-error-message-DELETEapi-v1-tickets--id-&quot;&gt;

Tip: Check that you&amp;#039;re properly connected to the network.
If you&amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;form id=&quot;form-DELETEapi-v1-tickets--id-&quot; data-method=&quot;DELETE&quot;
      data-path=&quot;api/v1/tickets/{id}&quot;
      data-authed=&quot;1&quot;
      data-hasfiles=&quot;0&quot;
      data-isarraybody=&quot;0&quot;
      autocomplete=&quot;off&quot;
      onsubmit=&quot;event.preventDefault(); executeTryOut(&#039;DELETEapi-v1-tickets--id-&#039;, this);&quot;&gt;
    &lt;h3&gt;
        Request&amp;nbsp;&amp;nbsp;&amp;nbsp;
                    &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-tryout-DELETEapi-v1-tickets--id-&quot;
                    onclick=&quot;tryItOut(&#039;DELETEapi-v1-tickets--id-&#039;);&quot;&gt;Try it out ⚡
            &lt;/button&gt;
            &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-canceltryout-DELETEapi-v1-tickets--id-&quot;
                    onclick=&quot;cancelTryOut(&#039;DELETEapi-v1-tickets--id-&#039;);&quot; hidden&gt;Cancel 🛑
            &lt;/button&gt;&amp;nbsp;&amp;nbsp;
            &lt;button type=&quot;submit&quot;
                    style=&quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-executetryout-DELETEapi-v1-tickets--id-&quot;
                    data-initial-text=&quot;Send Request 💥&quot;
                    data-loading-text=&quot;⏱ Sending...&quot;
                    hidden&gt;Send Request 💥
            &lt;/button&gt;
            &lt;/h3&gt;
            &lt;p&gt;
            &lt;small class=&quot;badge badge-red&quot;&gt;DELETE&lt;/small&gt;
            &lt;b&gt;&lt;code&gt;api/v1/tickets/{id}&lt;/code&gt;&lt;/b&gt;
        &lt;/p&gt;
                &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Headers&lt;/b&gt;&lt;/h4&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Authorization&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Authorization&quot; class=&quot;auth-value&quot;               data-endpoint=&quot;DELETEapi-v1-tickets--id-&quot;
               value=&quot;Bearer {YOUR_AUTH_KEY}&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;Bearer {YOUR_AUTH_KEY}&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Content-Type&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Content-Type&quot;                data-endpoint=&quot;DELETEapi-v1-tickets--id-&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Accept&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Accept&quot;                data-endpoint=&quot;DELETEapi-v1-tickets--id-&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                        &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;URL Parameters&lt;/b&gt;&lt;/h4&gt;
                    &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;id&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;integer&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;number&quot; style=&quot;display: none&quot;
               step=&quot;any&quot;               name=&quot;id&quot;                data-endpoint=&quot;DELETEapi-v1-tickets--id-&quot;
               value=&quot;1&quot;
               data-component=&quot;url&quot;&gt;
    &lt;br&gt;
&lt;p&gt;The ID of the ticket. Example: &lt;code&gt;1&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                    &lt;/form&gt;

                    &lt;h2 id=&quot;endpoints-PUTapi-v1-tickets--ticket_id-&quot;&gt;PUT api/v1/tickets/{ticket_id}&lt;/h2&gt;

&lt;p&gt;
&lt;small class=&quot;badge badge-darkred&quot;&gt;requires authentication&lt;/small&gt;
&lt;/p&gt;



&lt;span id=&quot;example-requests-PUTapi-v1-tickets--ticket_id-&quot;&gt;
&lt;blockquote&gt;Example request:&lt;/blockquote&gt;


&lt;div class=&quot;bash-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-bash&quot;&gt;curl --request PUT \
    &quot;http://tickets-api.test/api/v1/tickets/1&quot; \
    --header &quot;Authorization: Bearer {YOUR_AUTH_KEY}&quot; \
    --header &quot;Content-Type: application/json&quot; \
    --header &quot;Accept: application/json&quot; \
    --data &quot;{
    \&quot;data\&quot;: {
        \&quot;attributes\&quot;: {
            \&quot;title\&quot;: \&quot;quia\&quot;,
            \&quot;description\&quot;: \&quot;Pariatur aut odio quod omnis.\&quot;,
            \&quot;status\&quot;: \&quot;H\&quot;
        },
        \&quot;relationships\&quot;: {
            \&quot;author\&quot;: {
                \&quot;data\&quot;: {
                    \&quot;id\&quot;: 1
                }
            }
        }
    }
}&quot;
&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;


&lt;div class=&quot;javascript-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-javascript&quot;&gt;const url = new URL(
    &quot;http://tickets-api.test/api/v1/tickets/1&quot;
);

const headers = {
    &quot;Authorization&quot;: &quot;Bearer {YOUR_AUTH_KEY}&quot;,
    &quot;Content-Type&quot;: &quot;application/json&quot;,
    &quot;Accept&quot;: &quot;application/json&quot;,
};

let body = {
    &quot;data&quot;: {
        &quot;attributes&quot;: {
            &quot;title&quot;: &quot;quia&quot;,
            &quot;description&quot;: &quot;Pariatur aut odio quod omnis.&quot;,
            &quot;status&quot;: &quot;H&quot;
        },
        &quot;relationships&quot;: {
            &quot;author&quot;: {
                &quot;data&quot;: {
                    &quot;id&quot;: 1
                }
            }
        }
    }
};

fetch(url, {
    method: &quot;PUT&quot;,
    headers,
    body: JSON.stringify(body),
}).then(response =&amp;gt; response.json());&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;

&lt;/span&gt;

&lt;span id=&quot;example-responses-PUTapi-v1-tickets--ticket_id-&quot;&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-results-PUTapi-v1-tickets--ticket_id-&quot; hidden&gt;
    &lt;blockquote&gt;Received response&lt;span
                id=&quot;execution-response-status-PUTapi-v1-tickets--ticket_id-&quot;&gt;&lt;/span&gt;:
    &lt;/blockquote&gt;
    &lt;pre class=&quot;json&quot;&gt;&lt;code id=&quot;execution-response-content-PUTapi-v1-tickets--ticket_id-&quot;
      data-empty-response-text=&quot;&lt;Empty response&gt;&quot; style=&quot;max-height: 400px;&quot;&gt;&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-error-PUTapi-v1-tickets--ticket_id-&quot; hidden&gt;
    &lt;blockquote&gt;Request failed with error:&lt;/blockquote&gt;
    &lt;pre&gt;&lt;code id=&quot;execution-error-message-PUTapi-v1-tickets--ticket_id-&quot;&gt;

Tip: Check that you&amp;#039;re properly connected to the network.
If you&amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;form id=&quot;form-PUTapi-v1-tickets--ticket_id-&quot; data-method=&quot;PUT&quot;
      data-path=&quot;api/v1/tickets/{ticket_id}&quot;
      data-authed=&quot;1&quot;
      data-hasfiles=&quot;0&quot;
      data-isarraybody=&quot;0&quot;
      autocomplete=&quot;off&quot;
      onsubmit=&quot;event.preventDefault(); executeTryOut(&#039;PUTapi-v1-tickets--ticket_id-&#039;, this);&quot;&gt;
    &lt;h3&gt;
        Request&amp;nbsp;&amp;nbsp;&amp;nbsp;
                    &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-tryout-PUTapi-v1-tickets--ticket_id-&quot;
                    onclick=&quot;tryItOut(&#039;PUTapi-v1-tickets--ticket_id-&#039;);&quot;&gt;Try it out ⚡
            &lt;/button&gt;
            &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-canceltryout-PUTapi-v1-tickets--ticket_id-&quot;
                    onclick=&quot;cancelTryOut(&#039;PUTapi-v1-tickets--ticket_id-&#039;);&quot; hidden&gt;Cancel 🛑
            &lt;/button&gt;&amp;nbsp;&amp;nbsp;
            &lt;button type=&quot;submit&quot;
                    style=&quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-executetryout-PUTapi-v1-tickets--ticket_id-&quot;
                    data-initial-text=&quot;Send Request 💥&quot;
                    data-loading-text=&quot;⏱ Sending...&quot;
                    hidden&gt;Send Request 💥
            &lt;/button&gt;
            &lt;/h3&gt;
            &lt;p&gt;
            &lt;small class=&quot;badge badge-darkblue&quot;&gt;PUT&lt;/small&gt;
            &lt;b&gt;&lt;code&gt;api/v1/tickets/{ticket_id}&lt;/code&gt;&lt;/b&gt;
        &lt;/p&gt;
                &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Headers&lt;/b&gt;&lt;/h4&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Authorization&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Authorization&quot; class=&quot;auth-value&quot;               data-endpoint=&quot;PUTapi-v1-tickets--ticket_id-&quot;
               value=&quot;Bearer {YOUR_AUTH_KEY}&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;Bearer {YOUR_AUTH_KEY}&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Content-Type&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Content-Type&quot;                data-endpoint=&quot;PUTapi-v1-tickets--ticket_id-&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Accept&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Accept&quot;                data-endpoint=&quot;PUTapi-v1-tickets--ticket_id-&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                        &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;URL Parameters&lt;/b&gt;&lt;/h4&gt;
                    &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;ticket_id&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;integer&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;number&quot; style=&quot;display: none&quot;
               step=&quot;any&quot;               name=&quot;ticket_id&quot;                data-endpoint=&quot;PUTapi-v1-tickets--ticket_id-&quot;
               value=&quot;1&quot;
               data-component=&quot;url&quot;&gt;
    &lt;br&gt;
&lt;p&gt;The ID of the ticket. Example: &lt;code&gt;1&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                            &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Body Parameters&lt;/b&gt;&lt;/h4&gt;
        &lt;div style=&quot; padding-left: 28px;  clear: unset;&quot;&gt;
        &lt;details&gt;
            &lt;summary style=&quot;padding-bottom: 10px;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;data&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;object&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
&lt;br&gt;

            &lt;/summary&gt;
                                                &lt;div style=&quot; margin-left: 14px; clear: unset;&quot;&gt;
        &lt;details&gt;
            &lt;summary style=&quot;padding-bottom: 10px;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;attributes&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;object&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
&lt;br&gt;

            &lt;/summary&gt;
                                                &lt;div style=&quot;margin-left: 28px; clear: unset;&quot;&gt;
                        &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;title&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;string&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;data.attributes.title&quot;                data-endpoint=&quot;PUTapi-v1-tickets--ticket_id-&quot;
               value=&quot;quia&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;quia&lt;/code&gt;&lt;/p&gt;
                    &lt;/div&gt;
                                                                &lt;div style=&quot;margin-left: 28px; clear: unset;&quot;&gt;
                        &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;description&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;string&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;data.attributes.description&quot;                data-endpoint=&quot;PUTapi-v1-tickets--ticket_id-&quot;
               value=&quot;Pariatur aut odio quod omnis.&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;Pariatur aut odio quod omnis.&lt;/code&gt;&lt;/p&gt;
                    &lt;/div&gt;
                                                                &lt;div style=&quot;margin-left: 28px; clear: unset;&quot;&gt;
                        &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;status&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;string&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;data.attributes.status&quot;                data-endpoint=&quot;PUTapi-v1-tickets--ticket_id-&quot;
               value=&quot;H&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;H&lt;/code&gt;&lt;/p&gt;
Must be one of:
&lt;ul style=&quot;list-style-type: square;&quot;&gt;&lt;li&gt;&lt;code&gt;A&lt;/code&gt;&lt;/li&gt; &lt;li&gt;&lt;code&gt;C&lt;/code&gt;&lt;/li&gt; &lt;li&gt;&lt;code&gt;H&lt;/code&gt;&lt;/li&gt; &lt;li&gt;&lt;code&gt;X&lt;/code&gt;&lt;/li&gt;&lt;/ul&gt;
                    &lt;/div&gt;
                                    &lt;/details&gt;
        &lt;/div&gt;
                                                                    &lt;div style=&quot; margin-left: 14px; clear: unset;&quot;&gt;
        &lt;details&gt;
            &lt;summary style=&quot;padding-bottom: 10px;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;relationships&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;object&lt;/small&gt;&amp;nbsp;
&lt;i&gt;optional&lt;/i&gt; &amp;nbsp;
&lt;br&gt;

            &lt;/summary&gt;
                                                &lt;div style=&quot; margin-left: 28px; clear: unset;&quot;&gt;
        &lt;details&gt;
            &lt;summary style=&quot;padding-bottom: 10px;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;author&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;object&lt;/small&gt;&amp;nbsp;
&lt;i&gt;optional&lt;/i&gt; &amp;nbsp;
&lt;br&gt;

            &lt;/summary&gt;
                                                &lt;div style=&quot; margin-left: 42px; clear: unset;&quot;&gt;
        &lt;details&gt;
            &lt;summary style=&quot;padding-bottom: 10px;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;data&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;object&lt;/small&gt;&amp;nbsp;
&lt;i&gt;optional&lt;/i&gt; &amp;nbsp;
&lt;br&gt;

            &lt;/summary&gt;
                                                &lt;div style=&quot;margin-left: 56px; clear: unset;&quot;&gt;
                        &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;id&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;integer&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;number&quot; style=&quot;display: none&quot;
               step=&quot;any&quot;               name=&quot;data.relationships.author.data.id&quot;                data-endpoint=&quot;PUTapi-v1-tickets--ticket_id-&quot;
               value=&quot;1&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;1&lt;/code&gt;&lt;/p&gt;
                    &lt;/div&gt;
                                    &lt;/details&gt;
        &lt;/div&gt;
                                        &lt;/details&gt;
        &lt;/div&gt;
                                        &lt;/details&gt;
        &lt;/div&gt;
                                        &lt;/details&gt;
        &lt;/div&gt;
        &lt;/form&gt;

                    &lt;h2 id=&quot;endpoints-PATCHapi-v1-tickets--ticket_id-&quot;&gt;Update the specified resource in storage.&lt;/h2&gt;

&lt;p&gt;
&lt;small class=&quot;badge badge-darkred&quot;&gt;requires authentication&lt;/small&gt;
&lt;/p&gt;



&lt;span id=&quot;example-requests-PATCHapi-v1-tickets--ticket_id-&quot;&gt;
&lt;blockquote&gt;Example request:&lt;/blockquote&gt;


&lt;div class=&quot;bash-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-bash&quot;&gt;curl --request PATCH \
    &quot;http://tickets-api.test/api/v1/tickets/1&quot; \
    --header &quot;Authorization: Bearer {YOUR_AUTH_KEY}&quot; \
    --header &quot;Content-Type: application/json&quot; \
    --header &quot;Accept: application/json&quot; \
    --data &quot;{
    \&quot;data\&quot;: {
        \&quot;attributes\&quot;: {
            \&quot;title\&quot;: \&quot;fugiat\&quot;,
            \&quot;description\&quot;: \&quot;Aut molestias molestiae deleniti voluptates dolores dolores.\&quot;,
            \&quot;status\&quot;: \&quot;C\&quot;
        },
        \&quot;relationships\&quot;: {
            \&quot;author\&quot;: {
                \&quot;data\&quot;: []
            }
        }
    }
}&quot;
&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;


&lt;div class=&quot;javascript-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-javascript&quot;&gt;const url = new URL(
    &quot;http://tickets-api.test/api/v1/tickets/1&quot;
);

const headers = {
    &quot;Authorization&quot;: &quot;Bearer {YOUR_AUTH_KEY}&quot;,
    &quot;Content-Type&quot;: &quot;application/json&quot;,
    &quot;Accept&quot;: &quot;application/json&quot;,
};

let body = {
    &quot;data&quot;: {
        &quot;attributes&quot;: {
            &quot;title&quot;: &quot;fugiat&quot;,
            &quot;description&quot;: &quot;Aut molestias molestiae deleniti voluptates dolores dolores.&quot;,
            &quot;status&quot;: &quot;C&quot;
        },
        &quot;relationships&quot;: {
            &quot;author&quot;: {
                &quot;data&quot;: []
            }
        }
    }
};

fetch(url, {
    method: &quot;PATCH&quot;,
    headers,
    body: JSON.stringify(body),
}).then(response =&amp;gt; response.json());&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;

&lt;/span&gt;

&lt;span id=&quot;example-responses-PATCHapi-v1-tickets--ticket_id-&quot;&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-results-PATCHapi-v1-tickets--ticket_id-&quot; hidden&gt;
    &lt;blockquote&gt;Received response&lt;span
                id=&quot;execution-response-status-PATCHapi-v1-tickets--ticket_id-&quot;&gt;&lt;/span&gt;:
    &lt;/blockquote&gt;
    &lt;pre class=&quot;json&quot;&gt;&lt;code id=&quot;execution-response-content-PATCHapi-v1-tickets--ticket_id-&quot;
      data-empty-response-text=&quot;&lt;Empty response&gt;&quot; style=&quot;max-height: 400px;&quot;&gt;&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-error-PATCHapi-v1-tickets--ticket_id-&quot; hidden&gt;
    &lt;blockquote&gt;Request failed with error:&lt;/blockquote&gt;
    &lt;pre&gt;&lt;code id=&quot;execution-error-message-PATCHapi-v1-tickets--ticket_id-&quot;&gt;

Tip: Check that you&amp;#039;re properly connected to the network.
If you&amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;form id=&quot;form-PATCHapi-v1-tickets--ticket_id-&quot; data-method=&quot;PATCH&quot;
      data-path=&quot;api/v1/tickets/{ticket_id}&quot;
      data-authed=&quot;1&quot;
      data-hasfiles=&quot;0&quot;
      data-isarraybody=&quot;0&quot;
      autocomplete=&quot;off&quot;
      onsubmit=&quot;event.preventDefault(); executeTryOut(&#039;PATCHapi-v1-tickets--ticket_id-&#039;, this);&quot;&gt;
    &lt;h3&gt;
        Request&amp;nbsp;&amp;nbsp;&amp;nbsp;
                    &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-tryout-PATCHapi-v1-tickets--ticket_id-&quot;
                    onclick=&quot;tryItOut(&#039;PATCHapi-v1-tickets--ticket_id-&#039;);&quot;&gt;Try it out ⚡
            &lt;/button&gt;
            &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-canceltryout-PATCHapi-v1-tickets--ticket_id-&quot;
                    onclick=&quot;cancelTryOut(&#039;PATCHapi-v1-tickets--ticket_id-&#039;);&quot; hidden&gt;Cancel 🛑
            &lt;/button&gt;&amp;nbsp;&amp;nbsp;
            &lt;button type=&quot;submit&quot;
                    style=&quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-executetryout-PATCHapi-v1-tickets--ticket_id-&quot;
                    data-initial-text=&quot;Send Request 💥&quot;
                    data-loading-text=&quot;⏱ Sending...&quot;
                    hidden&gt;Send Request 💥
            &lt;/button&gt;
            &lt;/h3&gt;
            &lt;p&gt;
            &lt;small class=&quot;badge badge-purple&quot;&gt;PATCH&lt;/small&gt;
            &lt;b&gt;&lt;code&gt;api/v1/tickets/{ticket_id}&lt;/code&gt;&lt;/b&gt;
        &lt;/p&gt;
                &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Headers&lt;/b&gt;&lt;/h4&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Authorization&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Authorization&quot; class=&quot;auth-value&quot;               data-endpoint=&quot;PATCHapi-v1-tickets--ticket_id-&quot;
               value=&quot;Bearer {YOUR_AUTH_KEY}&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;Bearer {YOUR_AUTH_KEY}&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Content-Type&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Content-Type&quot;                data-endpoint=&quot;PATCHapi-v1-tickets--ticket_id-&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Accept&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Accept&quot;                data-endpoint=&quot;PATCHapi-v1-tickets--ticket_id-&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                        &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;URL Parameters&lt;/b&gt;&lt;/h4&gt;
                    &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;ticket_id&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;integer&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;number&quot; style=&quot;display: none&quot;
               step=&quot;any&quot;               name=&quot;ticket_id&quot;                data-endpoint=&quot;PATCHapi-v1-tickets--ticket_id-&quot;
               value=&quot;1&quot;
               data-component=&quot;url&quot;&gt;
    &lt;br&gt;
&lt;p&gt;The ID of the ticket. Example: &lt;code&gt;1&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                            &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Body Parameters&lt;/b&gt;&lt;/h4&gt;
        &lt;div style=&quot; padding-left: 28px;  clear: unset;&quot;&gt;
        &lt;details&gt;
            &lt;summary style=&quot;padding-bottom: 10px;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;data&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;object&lt;/small&gt;&amp;nbsp;
&lt;i&gt;optional&lt;/i&gt; &amp;nbsp;
&lt;br&gt;

            &lt;/summary&gt;
                                                &lt;div style=&quot; margin-left: 14px; clear: unset;&quot;&gt;
        &lt;details&gt;
            &lt;summary style=&quot;padding-bottom: 10px;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;attributes&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;object&lt;/small&gt;&amp;nbsp;
&lt;i&gt;optional&lt;/i&gt; &amp;nbsp;
&lt;br&gt;

            &lt;/summary&gt;
                                                &lt;div style=&quot;margin-left: 28px; clear: unset;&quot;&gt;
                        &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;title&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;string&lt;/small&gt;&amp;nbsp;
&lt;i&gt;optional&lt;/i&gt; &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;data.attributes.title&quot;                data-endpoint=&quot;PATCHapi-v1-tickets--ticket_id-&quot;
               value=&quot;fugiat&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;fugiat&lt;/code&gt;&lt;/p&gt;
                    &lt;/div&gt;
                                                                &lt;div style=&quot;margin-left: 28px; clear: unset;&quot;&gt;
                        &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;description&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;string&lt;/small&gt;&amp;nbsp;
&lt;i&gt;optional&lt;/i&gt; &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;data.attributes.description&quot;                data-endpoint=&quot;PATCHapi-v1-tickets--ticket_id-&quot;
               value=&quot;Aut molestias molestiae deleniti voluptates dolores dolores.&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;Aut molestias molestiae deleniti voluptates dolores dolores.&lt;/code&gt;&lt;/p&gt;
                    &lt;/div&gt;
                                                                &lt;div style=&quot;margin-left: 28px; clear: unset;&quot;&gt;
                        &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;status&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;string&lt;/small&gt;&amp;nbsp;
&lt;i&gt;optional&lt;/i&gt; &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;data.attributes.status&quot;                data-endpoint=&quot;PATCHapi-v1-tickets--ticket_id-&quot;
               value=&quot;C&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;C&lt;/code&gt;&lt;/p&gt;
Must be one of:
&lt;ul style=&quot;list-style-type: square;&quot;&gt;&lt;li&gt;&lt;code&gt;A&lt;/code&gt;&lt;/li&gt; &lt;li&gt;&lt;code&gt;C&lt;/code&gt;&lt;/li&gt; &lt;li&gt;&lt;code&gt;H&lt;/code&gt;&lt;/li&gt; &lt;li&gt;&lt;code&gt;X&lt;/code&gt;&lt;/li&gt;&lt;/ul&gt;
                    &lt;/div&gt;
                                    &lt;/details&gt;
        &lt;/div&gt;
                                                                    &lt;div style=&quot; margin-left: 14px; clear: unset;&quot;&gt;
        &lt;details&gt;
            &lt;summary style=&quot;padding-bottom: 10px;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;relationships&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;object&lt;/small&gt;&amp;nbsp;
&lt;i&gt;optional&lt;/i&gt; &amp;nbsp;
&lt;br&gt;

            &lt;/summary&gt;
                                                &lt;div style=&quot; margin-left: 28px; clear: unset;&quot;&gt;
        &lt;details&gt;
            &lt;summary style=&quot;padding-bottom: 10px;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;author&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;object&lt;/small&gt;&amp;nbsp;
&lt;i&gt;optional&lt;/i&gt; &amp;nbsp;
&lt;br&gt;

            &lt;/summary&gt;
                                                &lt;div style=&quot; margin-left: 42px; clear: unset;&quot;&gt;
        &lt;details&gt;
            &lt;summary style=&quot;padding-bottom: 10px;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;data&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;object&lt;/small&gt;&amp;nbsp;
&lt;i&gt;optional&lt;/i&gt; &amp;nbsp;
&lt;br&gt;

            &lt;/summary&gt;
                                                &lt;div style=&quot;margin-left: 56px; clear: unset;&quot;&gt;
                        &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;id&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;string&lt;/small&gt;&amp;nbsp;
&lt;i&gt;optional&lt;/i&gt; &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;data.relationships.author.data.id&quot;                data-endpoint=&quot;PATCHapi-v1-tickets--ticket_id-&quot;
               value=&quot;&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;

                    &lt;/div&gt;
                                    &lt;/details&gt;
        &lt;/div&gt;
                                        &lt;/details&gt;
        &lt;/div&gt;
                                        &lt;/details&gt;
        &lt;/div&gt;
                                        &lt;/details&gt;
        &lt;/div&gt;
        &lt;/form&gt;

                    &lt;h2 id=&quot;endpoints-GETapi-v1-users&quot;&gt;Display a listing of the resource.&lt;/h2&gt;

&lt;p&gt;
&lt;small class=&quot;badge badge-darkred&quot;&gt;requires authentication&lt;/small&gt;
&lt;/p&gt;



&lt;span id=&quot;example-requests-GETapi-v1-users&quot;&gt;
&lt;blockquote&gt;Example request:&lt;/blockquote&gt;


&lt;div class=&quot;bash-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-bash&quot;&gt;curl --request GET \
    --get &quot;http://tickets-api.test/api/v1/users&quot; \
    --header &quot;Authorization: Bearer {YOUR_AUTH_KEY}&quot; \
    --header &quot;Content-Type: application/json&quot; \
    --header &quot;Accept: application/json&quot;&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;


&lt;div class=&quot;javascript-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-javascript&quot;&gt;const url = new URL(
    &quot;http://tickets-api.test/api/v1/users&quot;
);

const headers = {
    &quot;Authorization&quot;: &quot;Bearer {YOUR_AUTH_KEY}&quot;,
    &quot;Content-Type&quot;: &quot;application/json&quot;,
    &quot;Accept&quot;: &quot;application/json&quot;,
};

fetch(url, {
    method: &quot;GET&quot;,
    headers,
}).then(response =&amp;gt; response.json());&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;

&lt;/span&gt;

&lt;span id=&quot;example-responses-GETapi-v1-users&quot;&gt;
            &lt;blockquote&gt;
            &lt;p&gt;Example response (200):&lt;/p&gt;
        &lt;/blockquote&gt;
                &lt;details class=&quot;annotation&quot;&gt;
            &lt;summary style=&quot;cursor: pointer;&quot;&gt;
                &lt;small onclick=&quot;textContent = parentElement.parentElement.open ? &#039;Show headers&#039; : &#039;Hide headers&#039;&quot;&gt;Show headers&lt;/small&gt;
            &lt;/summary&gt;
            &lt;pre&gt;&lt;code class=&quot;language-http&quot;&gt;cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 &lt;/code&gt;&lt;/pre&gt;&lt;/details&gt;         &lt;pre&gt;

&lt;code class=&quot;language-json&quot; style=&quot;max-height: 300px;&quot;&gt;{
    &amp;quot;data&amp;quot;: [
        {
            &amp;quot;type&amp;quot;: &amp;quot;user&amp;quot;,
            &amp;quot;id&amp;quot;: 1,
            &amp;quot;attributes&amp;quot;: {
                &amp;quot;name&amp;quot;: &amp;quot;Jayce Effertz&amp;quot;,
                &amp;quot;email&amp;quot;: &amp;quot;elijah.miller@example.com&amp;quot;,
                &amp;quot;isManager&amp;quot;: false
            },
            &amp;quot;links&amp;quot;: {
                &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors/1&amp;quot;
            }
        },
        {
            &amp;quot;type&amp;quot;: &amp;quot;user&amp;quot;,
            &amp;quot;id&amp;quot;: 2,
            &amp;quot;attributes&amp;quot;: {
                &amp;quot;name&amp;quot;: &amp;quot;Philip Schmeler&amp;quot;,
                &amp;quot;email&amp;quot;: &amp;quot;thiel.mireille@example.com&amp;quot;,
                &amp;quot;isManager&amp;quot;: false
            },
            &amp;quot;links&amp;quot;: {
                &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors/2&amp;quot;
            }
        },
        {
            &amp;quot;type&amp;quot;: &amp;quot;user&amp;quot;,
            &amp;quot;id&amp;quot;: 3,
            &amp;quot;attributes&amp;quot;: {
                &amp;quot;name&amp;quot;: &amp;quot;Mr. Malcolm Lubowitz&amp;quot;,
                &amp;quot;email&amp;quot;: &amp;quot;eichmann.arlene@example.com&amp;quot;,
                &amp;quot;isManager&amp;quot;: false
            },
            &amp;quot;links&amp;quot;: {
                &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors/3&amp;quot;
            }
        },
        {
            &amp;quot;type&amp;quot;: &amp;quot;user&amp;quot;,
            &amp;quot;id&amp;quot;: 4,
            &amp;quot;attributes&amp;quot;: {
                &amp;quot;name&amp;quot;: &amp;quot;Mr. Austin Heller Jr.&amp;quot;,
                &amp;quot;email&amp;quot;: &amp;quot;botsford.eileen@example.org&amp;quot;,
                &amp;quot;isManager&amp;quot;: false
            },
            &amp;quot;links&amp;quot;: {
                &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors/4&amp;quot;
            }
        },
        {
            &amp;quot;type&amp;quot;: &amp;quot;user&amp;quot;,
            &amp;quot;id&amp;quot;: 5,
            &amp;quot;attributes&amp;quot;: {
                &amp;quot;name&amp;quot;: &amp;quot;Dr. Kristina Spencer DDS&amp;quot;,
                &amp;quot;email&amp;quot;: &amp;quot;drunolfsdottir@example.org&amp;quot;,
                &amp;quot;isManager&amp;quot;: false
            },
            &amp;quot;links&amp;quot;: {
                &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors/5&amp;quot;
            }
        },
        {
            &amp;quot;type&amp;quot;: &amp;quot;user&amp;quot;,
            &amp;quot;id&amp;quot;: 6,
            &amp;quot;attributes&amp;quot;: {
                &amp;quot;name&amp;quot;: &amp;quot;Dr. Diamond Sporer&amp;quot;,
                &amp;quot;email&amp;quot;: &amp;quot;madyson.brakus@example.com&amp;quot;,
                &amp;quot;isManager&amp;quot;: false
            },
            &amp;quot;links&amp;quot;: {
                &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors/6&amp;quot;
            }
        },
        {
            &amp;quot;type&amp;quot;: &amp;quot;user&amp;quot;,
            &amp;quot;id&amp;quot;: 7,
            &amp;quot;attributes&amp;quot;: {
                &amp;quot;name&amp;quot;: &amp;quot;Kathlyn Smith&amp;quot;,
                &amp;quot;email&amp;quot;: &amp;quot;kschaden@example.com&amp;quot;,
                &amp;quot;isManager&amp;quot;: false
            },
            &amp;quot;links&amp;quot;: {
                &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors/7&amp;quot;
            }
        },
        {
            &amp;quot;type&amp;quot;: &amp;quot;user&amp;quot;,
            &amp;quot;id&amp;quot;: 8,
            &amp;quot;attributes&amp;quot;: {
                &amp;quot;name&amp;quot;: &amp;quot;Irving Rowe&amp;quot;,
                &amp;quot;email&amp;quot;: &amp;quot;aheidenreich@example.net&amp;quot;,
                &amp;quot;isManager&amp;quot;: false
            },
            &amp;quot;links&amp;quot;: {
                &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors/8&amp;quot;
            }
        },
        {
            &amp;quot;type&amp;quot;: &amp;quot;user&amp;quot;,
            &amp;quot;id&amp;quot;: 9,
            &amp;quot;attributes&amp;quot;: {
                &amp;quot;name&amp;quot;: &amp;quot;Creola Lubowitz&amp;quot;,
                &amp;quot;email&amp;quot;: &amp;quot;runolfsdottir.rosina@example.org&amp;quot;,
                &amp;quot;isManager&amp;quot;: false
            },
            &amp;quot;links&amp;quot;: {
                &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors/9&amp;quot;
            }
        },
        {
            &amp;quot;type&amp;quot;: &amp;quot;user&amp;quot;,
            &amp;quot;id&amp;quot;: 10,
            &amp;quot;attributes&amp;quot;: {
                &amp;quot;name&amp;quot;: &amp;quot;Alejandra Ebert&amp;quot;,
                &amp;quot;email&amp;quot;: &amp;quot;bwillms@example.com&amp;quot;,
                &amp;quot;isManager&amp;quot;: false
            },
            &amp;quot;links&amp;quot;: {
                &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors/10&amp;quot;
            }
        },
        {
            &amp;quot;type&amp;quot;: &amp;quot;user&amp;quot;,
            &amp;quot;id&amp;quot;: 13,
            &amp;quot;attributes&amp;quot;: {
                &amp;quot;name&amp;quot;: &amp;quot;Manager&amp;quot;,
                &amp;quot;email&amp;quot;: &amp;quot;manager@manager.com&amp;quot;,
                &amp;quot;isManager&amp;quot;: true
            },
            &amp;quot;links&amp;quot;: {
                &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors/13&amp;quot;
            }
        }
    ],
    &amp;quot;links&amp;quot;: {
        &amp;quot;first&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/users?page=1&amp;quot;,
        &amp;quot;last&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/users?page=1&amp;quot;,
        &amp;quot;prev&amp;quot;: null,
        &amp;quot;next&amp;quot;: null
    },
    &amp;quot;meta&amp;quot;: {
        &amp;quot;current_page&amp;quot;: 1,
        &amp;quot;from&amp;quot;: 1,
        &amp;quot;last_page&amp;quot;: 1,
        &amp;quot;links&amp;quot;: [
            {
                &amp;quot;url&amp;quot;: null,
                &amp;quot;label&amp;quot;: &amp;quot;&amp;amp;laquo; Previous&amp;quot;,
                &amp;quot;active&amp;quot;: false
            },
            {
                &amp;quot;url&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/users?page=1&amp;quot;,
                &amp;quot;label&amp;quot;: &amp;quot;1&amp;quot;,
                &amp;quot;active&amp;quot;: true
            },
            {
                &amp;quot;url&amp;quot;: null,
                &amp;quot;label&amp;quot;: &amp;quot;Next &amp;amp;raquo;&amp;quot;,
                &amp;quot;active&amp;quot;: false
            }
        ],
        &amp;quot;path&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/users&amp;quot;,
        &amp;quot;per_page&amp;quot;: 15,
        &amp;quot;to&amp;quot;: 11,
        &amp;quot;total&amp;quot;: 11
    }
}&lt;/code&gt;
 &lt;/pre&gt;
    &lt;/span&gt;
&lt;span id=&quot;execution-results-GETapi-v1-users&quot; hidden&gt;
    &lt;blockquote&gt;Received response&lt;span
                id=&quot;execution-response-status-GETapi-v1-users&quot;&gt;&lt;/span&gt;:
    &lt;/blockquote&gt;
    &lt;pre class=&quot;json&quot;&gt;&lt;code id=&quot;execution-response-content-GETapi-v1-users&quot;
      data-empty-response-text=&quot;&lt;Empty response&gt;&quot; style=&quot;max-height: 400px;&quot;&gt;&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-error-GETapi-v1-users&quot; hidden&gt;
    &lt;blockquote&gt;Request failed with error:&lt;/blockquote&gt;
    &lt;pre&gt;&lt;code id=&quot;execution-error-message-GETapi-v1-users&quot;&gt;

Tip: Check that you&amp;#039;re properly connected to the network.
If you&amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;form id=&quot;form-GETapi-v1-users&quot; data-method=&quot;GET&quot;
      data-path=&quot;api/v1/users&quot;
      data-authed=&quot;1&quot;
      data-hasfiles=&quot;0&quot;
      data-isarraybody=&quot;0&quot;
      autocomplete=&quot;off&quot;
      onsubmit=&quot;event.preventDefault(); executeTryOut(&#039;GETapi-v1-users&#039;, this);&quot;&gt;
    &lt;h3&gt;
        Request&amp;nbsp;&amp;nbsp;&amp;nbsp;
                    &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-tryout-GETapi-v1-users&quot;
                    onclick=&quot;tryItOut(&#039;GETapi-v1-users&#039;);&quot;&gt;Try it out ⚡
            &lt;/button&gt;
            &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-canceltryout-GETapi-v1-users&quot;
                    onclick=&quot;cancelTryOut(&#039;GETapi-v1-users&#039;);&quot; hidden&gt;Cancel 🛑
            &lt;/button&gt;&amp;nbsp;&amp;nbsp;
            &lt;button type=&quot;submit&quot;
                    style=&quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-executetryout-GETapi-v1-users&quot;
                    data-initial-text=&quot;Send Request 💥&quot;
                    data-loading-text=&quot;⏱ Sending...&quot;
                    hidden&gt;Send Request 💥
            &lt;/button&gt;
            &lt;/h3&gt;
            &lt;p&gt;
            &lt;small class=&quot;badge badge-green&quot;&gt;GET&lt;/small&gt;
            &lt;b&gt;&lt;code&gt;api/v1/users&lt;/code&gt;&lt;/b&gt;
        &lt;/p&gt;
                &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Headers&lt;/b&gt;&lt;/h4&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Authorization&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Authorization&quot; class=&quot;auth-value&quot;               data-endpoint=&quot;GETapi-v1-users&quot;
               value=&quot;Bearer {YOUR_AUTH_KEY}&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;Bearer {YOUR_AUTH_KEY}&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Content-Type&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Content-Type&quot;                data-endpoint=&quot;GETapi-v1-users&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Accept&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Accept&quot;                data-endpoint=&quot;GETapi-v1-users&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                        &lt;/form&gt;

                    &lt;h2 id=&quot;endpoints-POSTapi-v1-users&quot;&gt;Store a newly created resource in storage.&lt;/h2&gt;

&lt;p&gt;
&lt;small class=&quot;badge badge-darkred&quot;&gt;requires authentication&lt;/small&gt;
&lt;/p&gt;



&lt;span id=&quot;example-requests-POSTapi-v1-users&quot;&gt;
&lt;blockquote&gt;Example request:&lt;/blockquote&gt;


&lt;div class=&quot;bash-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-bash&quot;&gt;curl --request POST \
    &quot;http://tickets-api.test/api/v1/users&quot; \
    --header &quot;Authorization: Bearer {YOUR_AUTH_KEY}&quot; \
    --header &quot;Content-Type: application/json&quot; \
    --header &quot;Accept: application/json&quot; \
    --data &quot;{
    \&quot;data\&quot;: {
        \&quot;attributes\&quot;: {
            \&quot;name\&quot;: \&quot;omnis\&quot;,
            \&quot;email\&quot;: \&quot;ozieme@example.net\&quot;,
            \&quot;isManager\&quot;: true,
            \&quot;password\&quot;: \&quot;~Yo&amp;lt;Z&amp;gt;\&quot;
        }
    }
}&quot;
&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;


&lt;div class=&quot;javascript-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-javascript&quot;&gt;const url = new URL(
    &quot;http://tickets-api.test/api/v1/users&quot;
);

const headers = {
    &quot;Authorization&quot;: &quot;Bearer {YOUR_AUTH_KEY}&quot;,
    &quot;Content-Type&quot;: &quot;application/json&quot;,
    &quot;Accept&quot;: &quot;application/json&quot;,
};

let body = {
    &quot;data&quot;: {
        &quot;attributes&quot;: {
            &quot;name&quot;: &quot;omnis&quot;,
            &quot;email&quot;: &quot;ozieme@example.net&quot;,
            &quot;isManager&quot;: true,
            &quot;password&quot;: &quot;~Yo&amp;lt;Z&amp;gt;&quot;
        }
    }
};

fetch(url, {
    method: &quot;POST&quot;,
    headers,
    body: JSON.stringify(body),
}).then(response =&amp;gt; response.json());&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;

&lt;/span&gt;

&lt;span id=&quot;example-responses-POSTapi-v1-users&quot;&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-results-POSTapi-v1-users&quot; hidden&gt;
    &lt;blockquote&gt;Received response&lt;span
                id=&quot;execution-response-status-POSTapi-v1-users&quot;&gt;&lt;/span&gt;:
    &lt;/blockquote&gt;
    &lt;pre class=&quot;json&quot;&gt;&lt;code id=&quot;execution-response-content-POSTapi-v1-users&quot;
      data-empty-response-text=&quot;&lt;Empty response&gt;&quot; style=&quot;max-height: 400px;&quot;&gt;&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-error-POSTapi-v1-users&quot; hidden&gt;
    &lt;blockquote&gt;Request failed with error:&lt;/blockquote&gt;
    &lt;pre&gt;&lt;code id=&quot;execution-error-message-POSTapi-v1-users&quot;&gt;

Tip: Check that you&amp;#039;re properly connected to the network.
If you&amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;form id=&quot;form-POSTapi-v1-users&quot; data-method=&quot;POST&quot;
      data-path=&quot;api/v1/users&quot;
      data-authed=&quot;1&quot;
      data-hasfiles=&quot;0&quot;
      data-isarraybody=&quot;0&quot;
      autocomplete=&quot;off&quot;
      onsubmit=&quot;event.preventDefault(); executeTryOut(&#039;POSTapi-v1-users&#039;, this);&quot;&gt;
    &lt;h3&gt;
        Request&amp;nbsp;&amp;nbsp;&amp;nbsp;
                    &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-tryout-POSTapi-v1-users&quot;
                    onclick=&quot;tryItOut(&#039;POSTapi-v1-users&#039;);&quot;&gt;Try it out ⚡
            &lt;/button&gt;
            &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-canceltryout-POSTapi-v1-users&quot;
                    onclick=&quot;cancelTryOut(&#039;POSTapi-v1-users&#039;);&quot; hidden&gt;Cancel 🛑
            &lt;/button&gt;&amp;nbsp;&amp;nbsp;
            &lt;button type=&quot;submit&quot;
                    style=&quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-executetryout-POSTapi-v1-users&quot;
                    data-initial-text=&quot;Send Request 💥&quot;
                    data-loading-text=&quot;⏱ Sending...&quot;
                    hidden&gt;Send Request 💥
            &lt;/button&gt;
            &lt;/h3&gt;
            &lt;p&gt;
            &lt;small class=&quot;badge badge-black&quot;&gt;POST&lt;/small&gt;
            &lt;b&gt;&lt;code&gt;api/v1/users&lt;/code&gt;&lt;/b&gt;
        &lt;/p&gt;
                &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Headers&lt;/b&gt;&lt;/h4&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Authorization&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Authorization&quot; class=&quot;auth-value&quot;               data-endpoint=&quot;POSTapi-v1-users&quot;
               value=&quot;Bearer {YOUR_AUTH_KEY}&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;Bearer {YOUR_AUTH_KEY}&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Content-Type&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Content-Type&quot;                data-endpoint=&quot;POSTapi-v1-users&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Accept&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Accept&quot;                data-endpoint=&quot;POSTapi-v1-users&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Body Parameters&lt;/b&gt;&lt;/h4&gt;
        &lt;div style=&quot; padding-left: 28px;  clear: unset;&quot;&gt;
        &lt;details&gt;
            &lt;summary style=&quot;padding-bottom: 10px;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;data&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;object&lt;/small&gt;&amp;nbsp;
&lt;i&gt;optional&lt;/i&gt; &amp;nbsp;
&lt;br&gt;

            &lt;/summary&gt;
                                                &lt;div style=&quot; margin-left: 14px; clear: unset;&quot;&gt;
        &lt;details&gt;
            &lt;summary style=&quot;padding-bottom: 10px;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;attributes&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;object&lt;/small&gt;&amp;nbsp;
&lt;i&gt;optional&lt;/i&gt; &amp;nbsp;
&lt;br&gt;

            &lt;/summary&gt;
                                                &lt;div style=&quot;margin-left: 28px; clear: unset;&quot;&gt;
                        &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;name&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;string&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;data.attributes.name&quot;                data-endpoint=&quot;POSTapi-v1-users&quot;
               value=&quot;omnis&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;omnis&lt;/code&gt;&lt;/p&gt;
                    &lt;/div&gt;
                                                                &lt;div style=&quot;margin-left: 28px; clear: unset;&quot;&gt;
                        &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;email&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;string&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;data.attributes.email&quot;                data-endpoint=&quot;POSTapi-v1-users&quot;
               value=&quot;ozieme@example.net&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Must be a valid email address. Example: &lt;code&gt;ozieme@example.net&lt;/code&gt;&lt;/p&gt;
                    &lt;/div&gt;
                                                                &lt;div style=&quot;margin-left: 28px; clear: unset;&quot;&gt;
                        &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;isManager&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;boolean&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;label data-endpoint=&quot;POSTapi-v1-users&quot; style=&quot;display: none&quot;&gt;
            &lt;input type=&quot;radio&quot; name=&quot;data.attributes.isManager&quot;
                   value=&quot;true&quot;
                   data-endpoint=&quot;POSTapi-v1-users&quot;
                   data-component=&quot;body&quot;             &gt;
            &lt;code&gt;true&lt;/code&gt;
        &lt;/label&gt;
        &lt;label data-endpoint=&quot;POSTapi-v1-users&quot; style=&quot;display: none&quot;&gt;
            &lt;input type=&quot;radio&quot; name=&quot;data.attributes.isManager&quot;
                   value=&quot;false&quot;
                   data-endpoint=&quot;POSTapi-v1-users&quot;
                   data-component=&quot;body&quot;             &gt;
            &lt;code&gt;false&lt;/code&gt;
        &lt;/label&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;true&lt;/code&gt;&lt;/p&gt;
                    &lt;/div&gt;
                                                                &lt;div style=&quot;margin-left: 28px; clear: unset;&quot;&gt;
                        &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;password&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;string&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;data.attributes.password&quot;                data-endpoint=&quot;POSTapi-v1-users&quot;
               value=&quot;~Yo&lt;Z&gt;&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;~Yo&amp;lt;Z&amp;gt;&lt;/code&gt;&lt;/p&gt;
                    &lt;/div&gt;
                                    &lt;/details&gt;
        &lt;/div&gt;
                                        &lt;/details&gt;
        &lt;/div&gt;
        &lt;/form&gt;

                    &lt;h2 id=&quot;endpoints-GETapi-v1-users--id-&quot;&gt;Display the specified resource.&lt;/h2&gt;

&lt;p&gt;
&lt;small class=&quot;badge badge-darkred&quot;&gt;requires authentication&lt;/small&gt;
&lt;/p&gt;



&lt;span id=&quot;example-requests-GETapi-v1-users--id-&quot;&gt;
&lt;blockquote&gt;Example request:&lt;/blockquote&gt;


&lt;div class=&quot;bash-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-bash&quot;&gt;curl --request GET \
    --get &quot;http://tickets-api.test/api/v1/users/1&quot; \
    --header &quot;Authorization: Bearer {YOUR_AUTH_KEY}&quot; \
    --header &quot;Content-Type: application/json&quot; \
    --header &quot;Accept: application/json&quot;&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;


&lt;div class=&quot;javascript-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-javascript&quot;&gt;const url = new URL(
    &quot;http://tickets-api.test/api/v1/users/1&quot;
);

const headers = {
    &quot;Authorization&quot;: &quot;Bearer {YOUR_AUTH_KEY}&quot;,
    &quot;Content-Type&quot;: &quot;application/json&quot;,
    &quot;Accept&quot;: &quot;application/json&quot;,
};

fetch(url, {
    method: &quot;GET&quot;,
    headers,
}).then(response =&amp;gt; response.json());&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;

&lt;/span&gt;

&lt;span id=&quot;example-responses-GETapi-v1-users--id-&quot;&gt;
            &lt;blockquote&gt;
            &lt;p&gt;Example response (200):&lt;/p&gt;
        &lt;/blockquote&gt;
                &lt;details class=&quot;annotation&quot;&gt;
            &lt;summary style=&quot;cursor: pointer;&quot;&gt;
                &lt;small onclick=&quot;textContent = parentElement.parentElement.open ? &#039;Show headers&#039; : &#039;Hide headers&#039;&quot;&gt;Show headers&lt;/small&gt;
            &lt;/summary&gt;
            &lt;pre&gt;&lt;code class=&quot;language-http&quot;&gt;cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 &lt;/code&gt;&lt;/pre&gt;&lt;/details&gt;         &lt;pre&gt;

&lt;code class=&quot;language-json&quot; style=&quot;max-height: 300px;&quot;&gt;{
    &amp;quot;data&amp;quot;: {
        &amp;quot;type&amp;quot;: &amp;quot;user&amp;quot;,
        &amp;quot;id&amp;quot;: 1,
        &amp;quot;attributes&amp;quot;: {
            &amp;quot;name&amp;quot;: &amp;quot;Jayce Effertz&amp;quot;,
            &amp;quot;email&amp;quot;: &amp;quot;elijah.miller@example.com&amp;quot;,
            &amp;quot;isManager&amp;quot;: false
        },
        &amp;quot;links&amp;quot;: {
            &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors/1&amp;quot;
        }
    }
}&lt;/code&gt;
 &lt;/pre&gt;
    &lt;/span&gt;
&lt;span id=&quot;execution-results-GETapi-v1-users--id-&quot; hidden&gt;
    &lt;blockquote&gt;Received response&lt;span
                id=&quot;execution-response-status-GETapi-v1-users--id-&quot;&gt;&lt;/span&gt;:
    &lt;/blockquote&gt;
    &lt;pre class=&quot;json&quot;&gt;&lt;code id=&quot;execution-response-content-GETapi-v1-users--id-&quot;
      data-empty-response-text=&quot;&lt;Empty response&gt;&quot; style=&quot;max-height: 400px;&quot;&gt;&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-error-GETapi-v1-users--id-&quot; hidden&gt;
    &lt;blockquote&gt;Request failed with error:&lt;/blockquote&gt;
    &lt;pre&gt;&lt;code id=&quot;execution-error-message-GETapi-v1-users--id-&quot;&gt;

Tip: Check that you&amp;#039;re properly connected to the network.
If you&amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;form id=&quot;form-GETapi-v1-users--id-&quot; data-method=&quot;GET&quot;
      data-path=&quot;api/v1/users/{id}&quot;
      data-authed=&quot;1&quot;
      data-hasfiles=&quot;0&quot;
      data-isarraybody=&quot;0&quot;
      autocomplete=&quot;off&quot;
      onsubmit=&quot;event.preventDefault(); executeTryOut(&#039;GETapi-v1-users--id-&#039;, this);&quot;&gt;
    &lt;h3&gt;
        Request&amp;nbsp;&amp;nbsp;&amp;nbsp;
                    &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-tryout-GETapi-v1-users--id-&quot;
                    onclick=&quot;tryItOut(&#039;GETapi-v1-users--id-&#039;);&quot;&gt;Try it out ⚡
            &lt;/button&gt;
            &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-canceltryout-GETapi-v1-users--id-&quot;
                    onclick=&quot;cancelTryOut(&#039;GETapi-v1-users--id-&#039;);&quot; hidden&gt;Cancel 🛑
            &lt;/button&gt;&amp;nbsp;&amp;nbsp;
            &lt;button type=&quot;submit&quot;
                    style=&quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-executetryout-GETapi-v1-users--id-&quot;
                    data-initial-text=&quot;Send Request 💥&quot;
                    data-loading-text=&quot;⏱ Sending...&quot;
                    hidden&gt;Send Request 💥
            &lt;/button&gt;
            &lt;/h3&gt;
            &lt;p&gt;
            &lt;small class=&quot;badge badge-green&quot;&gt;GET&lt;/small&gt;
            &lt;b&gt;&lt;code&gt;api/v1/users/{id}&lt;/code&gt;&lt;/b&gt;
        &lt;/p&gt;
                &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Headers&lt;/b&gt;&lt;/h4&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Authorization&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Authorization&quot; class=&quot;auth-value&quot;               data-endpoint=&quot;GETapi-v1-users--id-&quot;
               value=&quot;Bearer {YOUR_AUTH_KEY}&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;Bearer {YOUR_AUTH_KEY}&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Content-Type&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Content-Type&quot;                data-endpoint=&quot;GETapi-v1-users--id-&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Accept&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Accept&quot;                data-endpoint=&quot;GETapi-v1-users--id-&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                        &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;URL Parameters&lt;/b&gt;&lt;/h4&gt;
                    &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;id&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;integer&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;number&quot; style=&quot;display: none&quot;
               step=&quot;any&quot;               name=&quot;id&quot;                data-endpoint=&quot;GETapi-v1-users--id-&quot;
               value=&quot;1&quot;
               data-component=&quot;url&quot;&gt;
    &lt;br&gt;
&lt;p&gt;The ID of the user. Example: &lt;code&gt;1&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                    &lt;/form&gt;

                    &lt;h2 id=&quot;endpoints-DELETEapi-v1-users--id-&quot;&gt;Remove the specified resource from storage.&lt;/h2&gt;

&lt;p&gt;
&lt;small class=&quot;badge badge-darkred&quot;&gt;requires authentication&lt;/small&gt;
&lt;/p&gt;



&lt;span id=&quot;example-requests-DELETEapi-v1-users--id-&quot;&gt;
&lt;blockquote&gt;Example request:&lt;/blockquote&gt;


&lt;div class=&quot;bash-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-bash&quot;&gt;curl --request DELETE \
    &quot;http://tickets-api.test/api/v1/users/1&quot; \
    --header &quot;Authorization: Bearer {YOUR_AUTH_KEY}&quot; \
    --header &quot;Content-Type: application/json&quot; \
    --header &quot;Accept: application/json&quot;&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;


&lt;div class=&quot;javascript-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-javascript&quot;&gt;const url = new URL(
    &quot;http://tickets-api.test/api/v1/users/1&quot;
);

const headers = {
    &quot;Authorization&quot;: &quot;Bearer {YOUR_AUTH_KEY}&quot;,
    &quot;Content-Type&quot;: &quot;application/json&quot;,
    &quot;Accept&quot;: &quot;application/json&quot;,
};

fetch(url, {
    method: &quot;DELETE&quot;,
    headers,
}).then(response =&amp;gt; response.json());&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;

&lt;/span&gt;

&lt;span id=&quot;example-responses-DELETEapi-v1-users--id-&quot;&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-results-DELETEapi-v1-users--id-&quot; hidden&gt;
    &lt;blockquote&gt;Received response&lt;span
                id=&quot;execution-response-status-DELETEapi-v1-users--id-&quot;&gt;&lt;/span&gt;:
    &lt;/blockquote&gt;
    &lt;pre class=&quot;json&quot;&gt;&lt;code id=&quot;execution-response-content-DELETEapi-v1-users--id-&quot;
      data-empty-response-text=&quot;&lt;Empty response&gt;&quot; style=&quot;max-height: 400px;&quot;&gt;&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-error-DELETEapi-v1-users--id-&quot; hidden&gt;
    &lt;blockquote&gt;Request failed with error:&lt;/blockquote&gt;
    &lt;pre&gt;&lt;code id=&quot;execution-error-message-DELETEapi-v1-users--id-&quot;&gt;

Tip: Check that you&amp;#039;re properly connected to the network.
If you&amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;form id=&quot;form-DELETEapi-v1-users--id-&quot; data-method=&quot;DELETE&quot;
      data-path=&quot;api/v1/users/{id}&quot;
      data-authed=&quot;1&quot;
      data-hasfiles=&quot;0&quot;
      data-isarraybody=&quot;0&quot;
      autocomplete=&quot;off&quot;
      onsubmit=&quot;event.preventDefault(); executeTryOut(&#039;DELETEapi-v1-users--id-&#039;, this);&quot;&gt;
    &lt;h3&gt;
        Request&amp;nbsp;&amp;nbsp;&amp;nbsp;
                    &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-tryout-DELETEapi-v1-users--id-&quot;
                    onclick=&quot;tryItOut(&#039;DELETEapi-v1-users--id-&#039;);&quot;&gt;Try it out ⚡
            &lt;/button&gt;
            &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-canceltryout-DELETEapi-v1-users--id-&quot;
                    onclick=&quot;cancelTryOut(&#039;DELETEapi-v1-users--id-&#039;);&quot; hidden&gt;Cancel 🛑
            &lt;/button&gt;&amp;nbsp;&amp;nbsp;
            &lt;button type=&quot;submit&quot;
                    style=&quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-executetryout-DELETEapi-v1-users--id-&quot;
                    data-initial-text=&quot;Send Request 💥&quot;
                    data-loading-text=&quot;⏱ Sending...&quot;
                    hidden&gt;Send Request 💥
            &lt;/button&gt;
            &lt;/h3&gt;
            &lt;p&gt;
            &lt;small class=&quot;badge badge-red&quot;&gt;DELETE&lt;/small&gt;
            &lt;b&gt;&lt;code&gt;api/v1/users/{id}&lt;/code&gt;&lt;/b&gt;
        &lt;/p&gt;
                &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Headers&lt;/b&gt;&lt;/h4&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Authorization&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Authorization&quot; class=&quot;auth-value&quot;               data-endpoint=&quot;DELETEapi-v1-users--id-&quot;
               value=&quot;Bearer {YOUR_AUTH_KEY}&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;Bearer {YOUR_AUTH_KEY}&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Content-Type&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Content-Type&quot;                data-endpoint=&quot;DELETEapi-v1-users--id-&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Accept&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Accept&quot;                data-endpoint=&quot;DELETEapi-v1-users--id-&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                        &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;URL Parameters&lt;/b&gt;&lt;/h4&gt;
                    &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;id&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;integer&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;number&quot; style=&quot;display: none&quot;
               step=&quot;any&quot;               name=&quot;id&quot;                data-endpoint=&quot;DELETEapi-v1-users--id-&quot;
               value=&quot;1&quot;
               data-component=&quot;url&quot;&gt;
    &lt;br&gt;
&lt;p&gt;The ID of the user. Example: &lt;code&gt;1&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                    &lt;/form&gt;

                    &lt;h2 id=&quot;endpoints-PUTapi-v1-users--user_id-&quot;&gt;PUT api/v1/users/{user_id}&lt;/h2&gt;

&lt;p&gt;
&lt;small class=&quot;badge badge-darkred&quot;&gt;requires authentication&lt;/small&gt;
&lt;/p&gt;



&lt;span id=&quot;example-requests-PUTapi-v1-users--user_id-&quot;&gt;
&lt;blockquote&gt;Example request:&lt;/blockquote&gt;


&lt;div class=&quot;bash-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-bash&quot;&gt;curl --request PUT \
    &quot;http://tickets-api.test/api/v1/users/1&quot; \
    --header &quot;Authorization: Bearer {YOUR_AUTH_KEY}&quot; \
    --header &quot;Content-Type: application/json&quot; \
    --header &quot;Accept: application/json&quot; \
    --data &quot;{
    \&quot;data\&quot;: {
        \&quot;attributes\&quot;: {
            \&quot;name\&quot;: \&quot;laudantium\&quot;,
            \&quot;email\&quot;: \&quot;lenna.corwin@example.com\&quot;,
            \&quot;isManager\&quot;: false,
            \&quot;password\&quot;: \&quot;O!?`w\\\\?eE\&quot;
        }
    }
}&quot;
&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;


&lt;div class=&quot;javascript-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-javascript&quot;&gt;const url = new URL(
    &quot;http://tickets-api.test/api/v1/users/1&quot;
);

const headers = {
    &quot;Authorization&quot;: &quot;Bearer {YOUR_AUTH_KEY}&quot;,
    &quot;Content-Type&quot;: &quot;application/json&quot;,
    &quot;Accept&quot;: &quot;application/json&quot;,
};

let body = {
    &quot;data&quot;: {
        &quot;attributes&quot;: {
            &quot;name&quot;: &quot;laudantium&quot;,
            &quot;email&quot;: &quot;lenna.corwin@example.com&quot;,
            &quot;isManager&quot;: false,
            &quot;password&quot;: &quot;O!?`w\\?eE&quot;
        }
    }
};

fetch(url, {
    method: &quot;PUT&quot;,
    headers,
    body: JSON.stringify(body),
}).then(response =&amp;gt; response.json());&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;

&lt;/span&gt;

&lt;span id=&quot;example-responses-PUTapi-v1-users--user_id-&quot;&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-results-PUTapi-v1-users--user_id-&quot; hidden&gt;
    &lt;blockquote&gt;Received response&lt;span
                id=&quot;execution-response-status-PUTapi-v1-users--user_id-&quot;&gt;&lt;/span&gt;:
    &lt;/blockquote&gt;
    &lt;pre class=&quot;json&quot;&gt;&lt;code id=&quot;execution-response-content-PUTapi-v1-users--user_id-&quot;
      data-empty-response-text=&quot;&lt;Empty response&gt;&quot; style=&quot;max-height: 400px;&quot;&gt;&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-error-PUTapi-v1-users--user_id-&quot; hidden&gt;
    &lt;blockquote&gt;Request failed with error:&lt;/blockquote&gt;
    &lt;pre&gt;&lt;code id=&quot;execution-error-message-PUTapi-v1-users--user_id-&quot;&gt;

Tip: Check that you&amp;#039;re properly connected to the network.
If you&amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;form id=&quot;form-PUTapi-v1-users--user_id-&quot; data-method=&quot;PUT&quot;
      data-path=&quot;api/v1/users/{user_id}&quot;
      data-authed=&quot;1&quot;
      data-hasfiles=&quot;0&quot;
      data-isarraybody=&quot;0&quot;
      autocomplete=&quot;off&quot;
      onsubmit=&quot;event.preventDefault(); executeTryOut(&#039;PUTapi-v1-users--user_id-&#039;, this);&quot;&gt;
    &lt;h3&gt;
        Request&amp;nbsp;&amp;nbsp;&amp;nbsp;
                    &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-tryout-PUTapi-v1-users--user_id-&quot;
                    onclick=&quot;tryItOut(&#039;PUTapi-v1-users--user_id-&#039;);&quot;&gt;Try it out ⚡
            &lt;/button&gt;
            &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-canceltryout-PUTapi-v1-users--user_id-&quot;
                    onclick=&quot;cancelTryOut(&#039;PUTapi-v1-users--user_id-&#039;);&quot; hidden&gt;Cancel 🛑
            &lt;/button&gt;&amp;nbsp;&amp;nbsp;
            &lt;button type=&quot;submit&quot;
                    style=&quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-executetryout-PUTapi-v1-users--user_id-&quot;
                    data-initial-text=&quot;Send Request 💥&quot;
                    data-loading-text=&quot;⏱ Sending...&quot;
                    hidden&gt;Send Request 💥
            &lt;/button&gt;
            &lt;/h3&gt;
            &lt;p&gt;
            &lt;small class=&quot;badge badge-darkblue&quot;&gt;PUT&lt;/small&gt;
            &lt;b&gt;&lt;code&gt;api/v1/users/{user_id}&lt;/code&gt;&lt;/b&gt;
        &lt;/p&gt;
                &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Headers&lt;/b&gt;&lt;/h4&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Authorization&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Authorization&quot; class=&quot;auth-value&quot;               data-endpoint=&quot;PUTapi-v1-users--user_id-&quot;
               value=&quot;Bearer {YOUR_AUTH_KEY}&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;Bearer {YOUR_AUTH_KEY}&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Content-Type&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Content-Type&quot;                data-endpoint=&quot;PUTapi-v1-users--user_id-&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Accept&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Accept&quot;                data-endpoint=&quot;PUTapi-v1-users--user_id-&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                        &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;URL Parameters&lt;/b&gt;&lt;/h4&gt;
                    &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;user_id&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;integer&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;number&quot; style=&quot;display: none&quot;
               step=&quot;any&quot;               name=&quot;user_id&quot;                data-endpoint=&quot;PUTapi-v1-users--user_id-&quot;
               value=&quot;1&quot;
               data-component=&quot;url&quot;&gt;
    &lt;br&gt;
&lt;p&gt;The ID of the user. Example: &lt;code&gt;1&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                            &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Body Parameters&lt;/b&gt;&lt;/h4&gt;
        &lt;div style=&quot; padding-left: 28px;  clear: unset;&quot;&gt;
        &lt;details&gt;
            &lt;summary style=&quot;padding-bottom: 10px;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;data&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;object&lt;/small&gt;&amp;nbsp;
&lt;i&gt;optional&lt;/i&gt; &amp;nbsp;
&lt;br&gt;

            &lt;/summary&gt;
                                                &lt;div style=&quot; margin-left: 14px; clear: unset;&quot;&gt;
        &lt;details&gt;
            &lt;summary style=&quot;padding-bottom: 10px;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;attributes&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;object&lt;/small&gt;&amp;nbsp;
&lt;i&gt;optional&lt;/i&gt; &amp;nbsp;
&lt;br&gt;

            &lt;/summary&gt;
                                                &lt;div style=&quot;margin-left: 28px; clear: unset;&quot;&gt;
                        &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;name&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;string&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;data.attributes.name&quot;                data-endpoint=&quot;PUTapi-v1-users--user_id-&quot;
               value=&quot;laudantium&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;laudantium&lt;/code&gt;&lt;/p&gt;
                    &lt;/div&gt;
                                                                &lt;div style=&quot;margin-left: 28px; clear: unset;&quot;&gt;
                        &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;email&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;string&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;data.attributes.email&quot;                data-endpoint=&quot;PUTapi-v1-users--user_id-&quot;
               value=&quot;lenna.corwin@example.com&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Must be a valid email address. Example: &lt;code&gt;lenna.corwin@example.com&lt;/code&gt;&lt;/p&gt;
                    &lt;/div&gt;
                                                                &lt;div style=&quot;margin-left: 28px; clear: unset;&quot;&gt;
                        &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;isManager&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;boolean&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;label data-endpoint=&quot;PUTapi-v1-users--user_id-&quot; style=&quot;display: none&quot;&gt;
            &lt;input type=&quot;radio&quot; name=&quot;data.attributes.isManager&quot;
                   value=&quot;true&quot;
                   data-endpoint=&quot;PUTapi-v1-users--user_id-&quot;
                   data-component=&quot;body&quot;             &gt;
            &lt;code&gt;true&lt;/code&gt;
        &lt;/label&gt;
        &lt;label data-endpoint=&quot;PUTapi-v1-users--user_id-&quot; style=&quot;display: none&quot;&gt;
            &lt;input type=&quot;radio&quot; name=&quot;data.attributes.isManager&quot;
                   value=&quot;false&quot;
                   data-endpoint=&quot;PUTapi-v1-users--user_id-&quot;
                   data-component=&quot;body&quot;             &gt;
            &lt;code&gt;false&lt;/code&gt;
        &lt;/label&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;false&lt;/code&gt;&lt;/p&gt;
                    &lt;/div&gt;
                                                                &lt;div style=&quot;margin-left: 28px; clear: unset;&quot;&gt;
                        &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;password&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;string&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;data.attributes.password&quot;                data-endpoint=&quot;PUTapi-v1-users--user_id-&quot;
               value=&quot;O!?`w\?eE&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;O!?&lt;/code&gt;w\?eE`&lt;/p&gt;
                    &lt;/div&gt;
                                    &lt;/details&gt;
        &lt;/div&gt;
                                        &lt;/details&gt;
        &lt;/div&gt;
        &lt;/form&gt;

                    &lt;h2 id=&quot;endpoints-PATCHapi-v1-users--user_id-&quot;&gt;Update the specified resource in storage.&lt;/h2&gt;

&lt;p&gt;
&lt;small class=&quot;badge badge-darkred&quot;&gt;requires authentication&lt;/small&gt;
&lt;/p&gt;



&lt;span id=&quot;example-requests-PATCHapi-v1-users--user_id-&quot;&gt;
&lt;blockquote&gt;Example request:&lt;/blockquote&gt;


&lt;div class=&quot;bash-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-bash&quot;&gt;curl --request PATCH \
    &quot;http://tickets-api.test/api/v1/users/1&quot; \
    --header &quot;Authorization: Bearer {YOUR_AUTH_KEY}&quot; \
    --header &quot;Content-Type: application/json&quot; \
    --header &quot;Accept: application/json&quot; \
    --data &quot;{
    \&quot;data\&quot;: {
        \&quot;attributes\&quot;: {
            \&quot;name\&quot;: \&quot;sequi\&quot;,
            \&quot;email\&quot;: \&quot;devyn97@example.net\&quot;,
            \&quot;isManager\&quot;: false,
            \&quot;password\&quot;: \&quot;#C8+\&#039;|Y+(&amp;gt;BqK6\&quot;
        }
    }
}&quot;
&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;


&lt;div class=&quot;javascript-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-javascript&quot;&gt;const url = new URL(
    &quot;http://tickets-api.test/api/v1/users/1&quot;
);

const headers = {
    &quot;Authorization&quot;: &quot;Bearer {YOUR_AUTH_KEY}&quot;,
    &quot;Content-Type&quot;: &quot;application/json&quot;,
    &quot;Accept&quot;: &quot;application/json&quot;,
};

let body = {
    &quot;data&quot;: {
        &quot;attributes&quot;: {
            &quot;name&quot;: &quot;sequi&quot;,
            &quot;email&quot;: &quot;devyn97@example.net&quot;,
            &quot;isManager&quot;: false,
            &quot;password&quot;: &quot;#C8+&#039;|Y+(&amp;gt;BqK6&quot;
        }
    }
};

fetch(url, {
    method: &quot;PATCH&quot;,
    headers,
    body: JSON.stringify(body),
}).then(response =&amp;gt; response.json());&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;

&lt;/span&gt;

&lt;span id=&quot;example-responses-PATCHapi-v1-users--user_id-&quot;&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-results-PATCHapi-v1-users--user_id-&quot; hidden&gt;
    &lt;blockquote&gt;Received response&lt;span
                id=&quot;execution-response-status-PATCHapi-v1-users--user_id-&quot;&gt;&lt;/span&gt;:
    &lt;/blockquote&gt;
    &lt;pre class=&quot;json&quot;&gt;&lt;code id=&quot;execution-response-content-PATCHapi-v1-users--user_id-&quot;
      data-empty-response-text=&quot;&lt;Empty response&gt;&quot; style=&quot;max-height: 400px;&quot;&gt;&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-error-PATCHapi-v1-users--user_id-&quot; hidden&gt;
    &lt;blockquote&gt;Request failed with error:&lt;/blockquote&gt;
    &lt;pre&gt;&lt;code id=&quot;execution-error-message-PATCHapi-v1-users--user_id-&quot;&gt;

Tip: Check that you&amp;#039;re properly connected to the network.
If you&amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;form id=&quot;form-PATCHapi-v1-users--user_id-&quot; data-method=&quot;PATCH&quot;
      data-path=&quot;api/v1/users/{user_id}&quot;
      data-authed=&quot;1&quot;
      data-hasfiles=&quot;0&quot;
      data-isarraybody=&quot;0&quot;
      autocomplete=&quot;off&quot;
      onsubmit=&quot;event.preventDefault(); executeTryOut(&#039;PATCHapi-v1-users--user_id-&#039;, this);&quot;&gt;
    &lt;h3&gt;
        Request&amp;nbsp;&amp;nbsp;&amp;nbsp;
                    &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-tryout-PATCHapi-v1-users--user_id-&quot;
                    onclick=&quot;tryItOut(&#039;PATCHapi-v1-users--user_id-&#039;);&quot;&gt;Try it out ⚡
            &lt;/button&gt;
            &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-canceltryout-PATCHapi-v1-users--user_id-&quot;
                    onclick=&quot;cancelTryOut(&#039;PATCHapi-v1-users--user_id-&#039;);&quot; hidden&gt;Cancel 🛑
            &lt;/button&gt;&amp;nbsp;&amp;nbsp;
            &lt;button type=&quot;submit&quot;
                    style=&quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-executetryout-PATCHapi-v1-users--user_id-&quot;
                    data-initial-text=&quot;Send Request 💥&quot;
                    data-loading-text=&quot;⏱ Sending...&quot;
                    hidden&gt;Send Request 💥
            &lt;/button&gt;
            &lt;/h3&gt;
            &lt;p&gt;
            &lt;small class=&quot;badge badge-purple&quot;&gt;PATCH&lt;/small&gt;
            &lt;b&gt;&lt;code&gt;api/v1/users/{user_id}&lt;/code&gt;&lt;/b&gt;
        &lt;/p&gt;
                &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Headers&lt;/b&gt;&lt;/h4&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Authorization&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Authorization&quot; class=&quot;auth-value&quot;               data-endpoint=&quot;PATCHapi-v1-users--user_id-&quot;
               value=&quot;Bearer {YOUR_AUTH_KEY}&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;Bearer {YOUR_AUTH_KEY}&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Content-Type&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Content-Type&quot;                data-endpoint=&quot;PATCHapi-v1-users--user_id-&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Accept&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Accept&quot;                data-endpoint=&quot;PATCHapi-v1-users--user_id-&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                        &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;URL Parameters&lt;/b&gt;&lt;/h4&gt;
                    &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;user_id&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;integer&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;number&quot; style=&quot;display: none&quot;
               step=&quot;any&quot;               name=&quot;user_id&quot;                data-endpoint=&quot;PATCHapi-v1-users--user_id-&quot;
               value=&quot;1&quot;
               data-component=&quot;url&quot;&gt;
    &lt;br&gt;
&lt;p&gt;The ID of the user. Example: &lt;code&gt;1&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                            &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Body Parameters&lt;/b&gt;&lt;/h4&gt;
        &lt;div style=&quot; padding-left: 28px;  clear: unset;&quot;&gt;
        &lt;details&gt;
            &lt;summary style=&quot;padding-bottom: 10px;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;data&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;object&lt;/small&gt;&amp;nbsp;
&lt;i&gt;optional&lt;/i&gt; &amp;nbsp;
&lt;br&gt;

            &lt;/summary&gt;
                                                &lt;div style=&quot; margin-left: 14px; clear: unset;&quot;&gt;
        &lt;details&gt;
            &lt;summary style=&quot;padding-bottom: 10px;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;attributes&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;object&lt;/small&gt;&amp;nbsp;
&lt;i&gt;optional&lt;/i&gt; &amp;nbsp;
&lt;br&gt;

            &lt;/summary&gt;
                                                &lt;div style=&quot;margin-left: 28px; clear: unset;&quot;&gt;
                        &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;name&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;string&lt;/small&gt;&amp;nbsp;
&lt;i&gt;optional&lt;/i&gt; &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;data.attributes.name&quot;                data-endpoint=&quot;PATCHapi-v1-users--user_id-&quot;
               value=&quot;sequi&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;sequi&lt;/code&gt;&lt;/p&gt;
                    &lt;/div&gt;
                                                                &lt;div style=&quot;margin-left: 28px; clear: unset;&quot;&gt;
                        &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;email&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;string&lt;/small&gt;&amp;nbsp;
&lt;i&gt;optional&lt;/i&gt; &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;data.attributes.email&quot;                data-endpoint=&quot;PATCHapi-v1-users--user_id-&quot;
               value=&quot;devyn97@example.net&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Must be a valid email address. Example: &lt;code&gt;devyn97@example.net&lt;/code&gt;&lt;/p&gt;
                    &lt;/div&gt;
                                                                &lt;div style=&quot;margin-left: 28px; clear: unset;&quot;&gt;
                        &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;isManager&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;boolean&lt;/small&gt;&amp;nbsp;
&lt;i&gt;optional&lt;/i&gt; &amp;nbsp;
                &lt;label data-endpoint=&quot;PATCHapi-v1-users--user_id-&quot; style=&quot;display: none&quot;&gt;
            &lt;input type=&quot;radio&quot; name=&quot;data.attributes.isManager&quot;
                   value=&quot;true&quot;
                   data-endpoint=&quot;PATCHapi-v1-users--user_id-&quot;
                   data-component=&quot;body&quot;             &gt;
            &lt;code&gt;true&lt;/code&gt;
        &lt;/label&gt;
        &lt;label data-endpoint=&quot;PATCHapi-v1-users--user_id-&quot; style=&quot;display: none&quot;&gt;
            &lt;input type=&quot;radio&quot; name=&quot;data.attributes.isManager&quot;
                   value=&quot;false&quot;
                   data-endpoint=&quot;PATCHapi-v1-users--user_id-&quot;
                   data-component=&quot;body&quot;             &gt;
            &lt;code&gt;false&lt;/code&gt;
        &lt;/label&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;false&lt;/code&gt;&lt;/p&gt;
                    &lt;/div&gt;
                                                                &lt;div style=&quot;margin-left: 28px; clear: unset;&quot;&gt;
                        &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;password&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;string&lt;/small&gt;&amp;nbsp;
&lt;i&gt;optional&lt;/i&gt; &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;data.attributes.password&quot;                data-endpoint=&quot;PATCHapi-v1-users--user_id-&quot;
               value=&quot;#C8+&#039;|Y+(&gt;BqK6&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;#C8+&#039;|Y+(&amp;gt;BqK6&lt;/code&gt;&lt;/p&gt;
                    &lt;/div&gt;
                                    &lt;/details&gt;
        &lt;/div&gt;
                                        &lt;/details&gt;
        &lt;/div&gt;
        &lt;/form&gt;

                    &lt;h2 id=&quot;endpoints-GETapi-v1-authors&quot;&gt;Display a listing of the resource.&lt;/h2&gt;

&lt;p&gt;
&lt;small class=&quot;badge badge-darkred&quot;&gt;requires authentication&lt;/small&gt;
&lt;/p&gt;



&lt;span id=&quot;example-requests-GETapi-v1-authors&quot;&gt;
&lt;blockquote&gt;Example request:&lt;/blockquote&gt;


&lt;div class=&quot;bash-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-bash&quot;&gt;curl --request GET \
    --get &quot;http://tickets-api.test/api/v1/authors&quot; \
    --header &quot;Authorization: Bearer {YOUR_AUTH_KEY}&quot; \
    --header &quot;Content-Type: application/json&quot; \
    --header &quot;Accept: application/json&quot;&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;


&lt;div class=&quot;javascript-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-javascript&quot;&gt;const url = new URL(
    &quot;http://tickets-api.test/api/v1/authors&quot;
);

const headers = {
    &quot;Authorization&quot;: &quot;Bearer {YOUR_AUTH_KEY}&quot;,
    &quot;Content-Type&quot;: &quot;application/json&quot;,
    &quot;Accept&quot;: &quot;application/json&quot;,
};

fetch(url, {
    method: &quot;GET&quot;,
    headers,
}).then(response =&amp;gt; response.json());&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;

&lt;/span&gt;

&lt;span id=&quot;example-responses-GETapi-v1-authors&quot;&gt;
            &lt;blockquote&gt;
            &lt;p&gt;Example response (200):&lt;/p&gt;
        &lt;/blockquote&gt;
                &lt;details class=&quot;annotation&quot;&gt;
            &lt;summary style=&quot;cursor: pointer;&quot;&gt;
                &lt;small onclick=&quot;textContent = parentElement.parentElement.open ? &#039;Show headers&#039; : &#039;Hide headers&#039;&quot;&gt;Show headers&lt;/small&gt;
            &lt;/summary&gt;
            &lt;pre&gt;&lt;code class=&quot;language-http&quot;&gt;cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 &lt;/code&gt;&lt;/pre&gt;&lt;/details&gt;         &lt;pre&gt;

&lt;code class=&quot;language-json&quot; style=&quot;max-height: 300px;&quot;&gt;{
    &amp;quot;data&amp;quot;: [
        {
            &amp;quot;type&amp;quot;: &amp;quot;user&amp;quot;,
            &amp;quot;id&amp;quot;: 1,
            &amp;quot;attributes&amp;quot;: {
                &amp;quot;name&amp;quot;: &amp;quot;Jayce Effertz&amp;quot;,
                &amp;quot;email&amp;quot;: &amp;quot;elijah.miller@example.com&amp;quot;,
                &amp;quot;isManager&amp;quot;: false,
                &amp;quot;email_verified_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;,
                &amp;quot;created_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;,
                &amp;quot;updated_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;
            },
            &amp;quot;links&amp;quot;: {
                &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors/1&amp;quot;
            }
        },
        {
            &amp;quot;type&amp;quot;: &amp;quot;user&amp;quot;,
            &amp;quot;id&amp;quot;: 2,
            &amp;quot;attributes&amp;quot;: {
                &amp;quot;name&amp;quot;: &amp;quot;Philip Schmeler&amp;quot;,
                &amp;quot;email&amp;quot;: &amp;quot;thiel.mireille@example.com&amp;quot;,
                &amp;quot;isManager&amp;quot;: false,
                &amp;quot;email_verified_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;,
                &amp;quot;created_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;,
                &amp;quot;updated_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;
            },
            &amp;quot;links&amp;quot;: {
                &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors/2&amp;quot;
            }
        },
        {
            &amp;quot;type&amp;quot;: &amp;quot;user&amp;quot;,
            &amp;quot;id&amp;quot;: 3,
            &amp;quot;attributes&amp;quot;: {
                &amp;quot;name&amp;quot;: &amp;quot;Mr. Malcolm Lubowitz&amp;quot;,
                &amp;quot;email&amp;quot;: &amp;quot;eichmann.arlene@example.com&amp;quot;,
                &amp;quot;isManager&amp;quot;: false,
                &amp;quot;email_verified_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;,
                &amp;quot;created_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;,
                &amp;quot;updated_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;
            },
            &amp;quot;links&amp;quot;: {
                &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors/3&amp;quot;
            }
        },
        {
            &amp;quot;type&amp;quot;: &amp;quot;user&amp;quot;,
            &amp;quot;id&amp;quot;: 4,
            &amp;quot;attributes&amp;quot;: {
                &amp;quot;name&amp;quot;: &amp;quot;Mr. Austin Heller Jr.&amp;quot;,
                &amp;quot;email&amp;quot;: &amp;quot;botsford.eileen@example.org&amp;quot;,
                &amp;quot;isManager&amp;quot;: false,
                &amp;quot;email_verified_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;,
                &amp;quot;created_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;,
                &amp;quot;updated_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;
            },
            &amp;quot;links&amp;quot;: {
                &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors/4&amp;quot;
            }
        },
        {
            &amp;quot;type&amp;quot;: &amp;quot;user&amp;quot;,
            &amp;quot;id&amp;quot;: 5,
            &amp;quot;attributes&amp;quot;: {
                &amp;quot;name&amp;quot;: &amp;quot;Dr. Kristina Spencer DDS&amp;quot;,
                &amp;quot;email&amp;quot;: &amp;quot;drunolfsdottir@example.org&amp;quot;,
                &amp;quot;isManager&amp;quot;: false,
                &amp;quot;email_verified_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;,
                &amp;quot;created_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;,
                &amp;quot;updated_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;
            },
            &amp;quot;links&amp;quot;: {
                &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors/5&amp;quot;
            }
        },
        {
            &amp;quot;type&amp;quot;: &amp;quot;user&amp;quot;,
            &amp;quot;id&amp;quot;: 6,
            &amp;quot;attributes&amp;quot;: {
                &amp;quot;name&amp;quot;: &amp;quot;Dr. Diamond Sporer&amp;quot;,
                &amp;quot;email&amp;quot;: &amp;quot;madyson.brakus@example.com&amp;quot;,
                &amp;quot;isManager&amp;quot;: false,
                &amp;quot;email_verified_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;,
                &amp;quot;created_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;,
                &amp;quot;updated_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;
            },
            &amp;quot;links&amp;quot;: {
                &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors/6&amp;quot;
            }
        },
        {
            &amp;quot;type&amp;quot;: &amp;quot;user&amp;quot;,
            &amp;quot;id&amp;quot;: 7,
            &amp;quot;attributes&amp;quot;: {
                &amp;quot;name&amp;quot;: &amp;quot;Kathlyn Smith&amp;quot;,
                &amp;quot;email&amp;quot;: &amp;quot;kschaden@example.com&amp;quot;,
                &amp;quot;isManager&amp;quot;: false,
                &amp;quot;email_verified_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;,
                &amp;quot;created_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;,
                &amp;quot;updated_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;
            },
            &amp;quot;links&amp;quot;: {
                &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors/7&amp;quot;
            }
        },
        {
            &amp;quot;type&amp;quot;: &amp;quot;user&amp;quot;,
            &amp;quot;id&amp;quot;: 8,
            &amp;quot;attributes&amp;quot;: {
                &amp;quot;name&amp;quot;: &amp;quot;Irving Rowe&amp;quot;,
                &amp;quot;email&amp;quot;: &amp;quot;aheidenreich@example.net&amp;quot;,
                &amp;quot;isManager&amp;quot;: false,
                &amp;quot;email_verified_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;,
                &amp;quot;created_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;,
                &amp;quot;updated_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;
            },
            &amp;quot;links&amp;quot;: {
                &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors/8&amp;quot;
            }
        },
        {
            &amp;quot;type&amp;quot;: &amp;quot;user&amp;quot;,
            &amp;quot;id&amp;quot;: 9,
            &amp;quot;attributes&amp;quot;: {
                &amp;quot;name&amp;quot;: &amp;quot;Creola Lubowitz&amp;quot;,
                &amp;quot;email&amp;quot;: &amp;quot;runolfsdottir.rosina@example.org&amp;quot;,
                &amp;quot;isManager&amp;quot;: false,
                &amp;quot;email_verified_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;,
                &amp;quot;created_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;,
                &amp;quot;updated_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;
            },
            &amp;quot;links&amp;quot;: {
                &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors/9&amp;quot;
            }
        },
        {
            &amp;quot;type&amp;quot;: &amp;quot;user&amp;quot;,
            &amp;quot;id&amp;quot;: 10,
            &amp;quot;attributes&amp;quot;: {
                &amp;quot;name&amp;quot;: &amp;quot;Alejandra Ebert&amp;quot;,
                &amp;quot;email&amp;quot;: &amp;quot;bwillms@example.com&amp;quot;,
                &amp;quot;isManager&amp;quot;: false,
                &amp;quot;email_verified_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;,
                &amp;quot;created_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;,
                &amp;quot;updated_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;
            },
            &amp;quot;links&amp;quot;: {
                &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors/10&amp;quot;
            }
        }
    ],
    &amp;quot;links&amp;quot;: {
        &amp;quot;first&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors?page=1&amp;quot;,
        &amp;quot;last&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors?page=7&amp;quot;,
        &amp;quot;prev&amp;quot;: null,
        &amp;quot;next&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors?page=2&amp;quot;
    },
    &amp;quot;meta&amp;quot;: {
        &amp;quot;current_page&amp;quot;: 1,
        &amp;quot;from&amp;quot;: 1,
        &amp;quot;last_page&amp;quot;: 7,
        &amp;quot;links&amp;quot;: [
            {
                &amp;quot;url&amp;quot;: null,
                &amp;quot;label&amp;quot;: &amp;quot;&amp;amp;laquo; Previous&amp;quot;,
                &amp;quot;active&amp;quot;: false
            },
            {
                &amp;quot;url&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors?page=1&amp;quot;,
                &amp;quot;label&amp;quot;: &amp;quot;1&amp;quot;,
                &amp;quot;active&amp;quot;: true
            },
            {
                &amp;quot;url&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors?page=2&amp;quot;,
                &amp;quot;label&amp;quot;: &amp;quot;2&amp;quot;,
                &amp;quot;active&amp;quot;: false
            },
            {
                &amp;quot;url&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors?page=3&amp;quot;,
                &amp;quot;label&amp;quot;: &amp;quot;3&amp;quot;,
                &amp;quot;active&amp;quot;: false
            },
            {
                &amp;quot;url&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors?page=4&amp;quot;,
                &amp;quot;label&amp;quot;: &amp;quot;4&amp;quot;,
                &amp;quot;active&amp;quot;: false
            },
            {
                &amp;quot;url&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors?page=5&amp;quot;,
                &amp;quot;label&amp;quot;: &amp;quot;5&amp;quot;,
                &amp;quot;active&amp;quot;: false
            },
            {
                &amp;quot;url&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors?page=6&amp;quot;,
                &amp;quot;label&amp;quot;: &amp;quot;6&amp;quot;,
                &amp;quot;active&amp;quot;: false
            },
            {
                &amp;quot;url&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors?page=7&amp;quot;,
                &amp;quot;label&amp;quot;: &amp;quot;7&amp;quot;,
                &amp;quot;active&amp;quot;: false
            },
            {
                &amp;quot;url&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors?page=2&amp;quot;,
                &amp;quot;label&amp;quot;: &amp;quot;Next &amp;amp;raquo;&amp;quot;,
                &amp;quot;active&amp;quot;: false
            }
        ],
        &amp;quot;path&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors&amp;quot;,
        &amp;quot;per_page&amp;quot;: 15,
        &amp;quot;to&amp;quot;: 10,
        &amp;quot;total&amp;quot;: 101
    }
}&lt;/code&gt;
 &lt;/pre&gt;
    &lt;/span&gt;
&lt;span id=&quot;execution-results-GETapi-v1-authors&quot; hidden&gt;
    &lt;blockquote&gt;Received response&lt;span
                id=&quot;execution-response-status-GETapi-v1-authors&quot;&gt;&lt;/span&gt;:
    &lt;/blockquote&gt;
    &lt;pre class=&quot;json&quot;&gt;&lt;code id=&quot;execution-response-content-GETapi-v1-authors&quot;
      data-empty-response-text=&quot;&lt;Empty response&gt;&quot; style=&quot;max-height: 400px;&quot;&gt;&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-error-GETapi-v1-authors&quot; hidden&gt;
    &lt;blockquote&gt;Request failed with error:&lt;/blockquote&gt;
    &lt;pre&gt;&lt;code id=&quot;execution-error-message-GETapi-v1-authors&quot;&gt;

Tip: Check that you&amp;#039;re properly connected to the network.
If you&amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;form id=&quot;form-GETapi-v1-authors&quot; data-method=&quot;GET&quot;
      data-path=&quot;api/v1/authors&quot;
      data-authed=&quot;1&quot;
      data-hasfiles=&quot;0&quot;
      data-isarraybody=&quot;0&quot;
      autocomplete=&quot;off&quot;
      onsubmit=&quot;event.preventDefault(); executeTryOut(&#039;GETapi-v1-authors&#039;, this);&quot;&gt;
    &lt;h3&gt;
        Request&amp;nbsp;&amp;nbsp;&amp;nbsp;
                    &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-tryout-GETapi-v1-authors&quot;
                    onclick=&quot;tryItOut(&#039;GETapi-v1-authors&#039;);&quot;&gt;Try it out ⚡
            &lt;/button&gt;
            &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-canceltryout-GETapi-v1-authors&quot;
                    onclick=&quot;cancelTryOut(&#039;GETapi-v1-authors&#039;);&quot; hidden&gt;Cancel 🛑
            &lt;/button&gt;&amp;nbsp;&amp;nbsp;
            &lt;button type=&quot;submit&quot;
                    style=&quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-executetryout-GETapi-v1-authors&quot;
                    data-initial-text=&quot;Send Request 💥&quot;
                    data-loading-text=&quot;⏱ Sending...&quot;
                    hidden&gt;Send Request 💥
            &lt;/button&gt;
            &lt;/h3&gt;
            &lt;p&gt;
            &lt;small class=&quot;badge badge-green&quot;&gt;GET&lt;/small&gt;
            &lt;b&gt;&lt;code&gt;api/v1/authors&lt;/code&gt;&lt;/b&gt;
        &lt;/p&gt;
                &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Headers&lt;/b&gt;&lt;/h4&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Authorization&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Authorization&quot; class=&quot;auth-value&quot;               data-endpoint=&quot;GETapi-v1-authors&quot;
               value=&quot;Bearer {YOUR_AUTH_KEY}&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;Bearer {YOUR_AUTH_KEY}&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Content-Type&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Content-Type&quot;                data-endpoint=&quot;GETapi-v1-authors&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Accept&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Accept&quot;                data-endpoint=&quot;GETapi-v1-authors&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                        &lt;/form&gt;

                    &lt;h2 id=&quot;endpoints-GETapi-v1-authors--id-&quot;&gt;Display the specified resource.&lt;/h2&gt;

&lt;p&gt;
&lt;small class=&quot;badge badge-darkred&quot;&gt;requires authentication&lt;/small&gt;
&lt;/p&gt;



&lt;span id=&quot;example-requests-GETapi-v1-authors--id-&quot;&gt;
&lt;blockquote&gt;Example request:&lt;/blockquote&gt;


&lt;div class=&quot;bash-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-bash&quot;&gt;curl --request GET \
    --get &quot;http://tickets-api.test/api/v1/authors/1&quot; \
    --header &quot;Authorization: Bearer {YOUR_AUTH_KEY}&quot; \
    --header &quot;Content-Type: application/json&quot; \
    --header &quot;Accept: application/json&quot;&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;


&lt;div class=&quot;javascript-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-javascript&quot;&gt;const url = new URL(
    &quot;http://tickets-api.test/api/v1/authors/1&quot;
);

const headers = {
    &quot;Authorization&quot;: &quot;Bearer {YOUR_AUTH_KEY}&quot;,
    &quot;Content-Type&quot;: &quot;application/json&quot;,
    &quot;Accept&quot;: &quot;application/json&quot;,
};

fetch(url, {
    method: &quot;GET&quot;,
    headers,
}).then(response =&amp;gt; response.json());&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;

&lt;/span&gt;

&lt;span id=&quot;example-responses-GETapi-v1-authors--id-&quot;&gt;
            &lt;blockquote&gt;
            &lt;p&gt;Example response (200):&lt;/p&gt;
        &lt;/blockquote&gt;
                &lt;details class=&quot;annotation&quot;&gt;
            &lt;summary style=&quot;cursor: pointer;&quot;&gt;
                &lt;small onclick=&quot;textContent = parentElement.parentElement.open ? &#039;Show headers&#039; : &#039;Hide headers&#039;&quot;&gt;Show headers&lt;/small&gt;
            &lt;/summary&gt;
            &lt;pre&gt;&lt;code class=&quot;language-http&quot;&gt;cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 &lt;/code&gt;&lt;/pre&gt;&lt;/details&gt;         &lt;pre&gt;

&lt;code class=&quot;language-json&quot; style=&quot;max-height: 300px;&quot;&gt;{
    &amp;quot;data&amp;quot;: {
        &amp;quot;type&amp;quot;: &amp;quot;user&amp;quot;,
        &amp;quot;id&amp;quot;: 1,
        &amp;quot;attributes&amp;quot;: {
            &amp;quot;name&amp;quot;: &amp;quot;Jayce Effertz&amp;quot;,
            &amp;quot;email&amp;quot;: &amp;quot;elijah.miller@example.com&amp;quot;,
            &amp;quot;isManager&amp;quot;: false,
            &amp;quot;email_verified_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;,
            &amp;quot;created_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;,
            &amp;quot;updated_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;
        },
        &amp;quot;links&amp;quot;: {
            &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors/1&amp;quot;
        }
    }
}&lt;/code&gt;
 &lt;/pre&gt;
    &lt;/span&gt;
&lt;span id=&quot;execution-results-GETapi-v1-authors--id-&quot; hidden&gt;
    &lt;blockquote&gt;Received response&lt;span
                id=&quot;execution-response-status-GETapi-v1-authors--id-&quot;&gt;&lt;/span&gt;:
    &lt;/blockquote&gt;
    &lt;pre class=&quot;json&quot;&gt;&lt;code id=&quot;execution-response-content-GETapi-v1-authors--id-&quot;
      data-empty-response-text=&quot;&lt;Empty response&gt;&quot; style=&quot;max-height: 400px;&quot;&gt;&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-error-GETapi-v1-authors--id-&quot; hidden&gt;
    &lt;blockquote&gt;Request failed with error:&lt;/blockquote&gt;
    &lt;pre&gt;&lt;code id=&quot;execution-error-message-GETapi-v1-authors--id-&quot;&gt;

Tip: Check that you&amp;#039;re properly connected to the network.
If you&amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;form id=&quot;form-GETapi-v1-authors--id-&quot; data-method=&quot;GET&quot;
      data-path=&quot;api/v1/authors/{id}&quot;
      data-authed=&quot;1&quot;
      data-hasfiles=&quot;0&quot;
      data-isarraybody=&quot;0&quot;
      autocomplete=&quot;off&quot;
      onsubmit=&quot;event.preventDefault(); executeTryOut(&#039;GETapi-v1-authors--id-&#039;, this);&quot;&gt;
    &lt;h3&gt;
        Request&amp;nbsp;&amp;nbsp;&amp;nbsp;
                    &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-tryout-GETapi-v1-authors--id-&quot;
                    onclick=&quot;tryItOut(&#039;GETapi-v1-authors--id-&#039;);&quot;&gt;Try it out ⚡
            &lt;/button&gt;
            &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-canceltryout-GETapi-v1-authors--id-&quot;
                    onclick=&quot;cancelTryOut(&#039;GETapi-v1-authors--id-&#039;);&quot; hidden&gt;Cancel 🛑
            &lt;/button&gt;&amp;nbsp;&amp;nbsp;
            &lt;button type=&quot;submit&quot;
                    style=&quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-executetryout-GETapi-v1-authors--id-&quot;
                    data-initial-text=&quot;Send Request 💥&quot;
                    data-loading-text=&quot;⏱ Sending...&quot;
                    hidden&gt;Send Request 💥
            &lt;/button&gt;
            &lt;/h3&gt;
            &lt;p&gt;
            &lt;small class=&quot;badge badge-green&quot;&gt;GET&lt;/small&gt;
            &lt;b&gt;&lt;code&gt;api/v1/authors/{id}&lt;/code&gt;&lt;/b&gt;
        &lt;/p&gt;
                &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Headers&lt;/b&gt;&lt;/h4&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Authorization&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Authorization&quot; class=&quot;auth-value&quot;               data-endpoint=&quot;GETapi-v1-authors--id-&quot;
               value=&quot;Bearer {YOUR_AUTH_KEY}&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;Bearer {YOUR_AUTH_KEY}&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Content-Type&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Content-Type&quot;                data-endpoint=&quot;GETapi-v1-authors--id-&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Accept&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Accept&quot;                data-endpoint=&quot;GETapi-v1-authors--id-&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                        &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;URL Parameters&lt;/b&gt;&lt;/h4&gt;
                    &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;id&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;integer&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;number&quot; style=&quot;display: none&quot;
               step=&quot;any&quot;               name=&quot;id&quot;                data-endpoint=&quot;GETapi-v1-authors--id-&quot;
               value=&quot;1&quot;
               data-component=&quot;url&quot;&gt;
    &lt;br&gt;
&lt;p&gt;The ID of the author. Example: &lt;code&gt;1&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                    &lt;/form&gt;

                    &lt;h2 id=&quot;endpoints-DELETEapi-v1-authors--id-&quot;&gt;Remove the specified resource from storage.&lt;/h2&gt;

&lt;p&gt;
&lt;small class=&quot;badge badge-darkred&quot;&gt;requires authentication&lt;/small&gt;
&lt;/p&gt;



&lt;span id=&quot;example-requests-DELETEapi-v1-authors--id-&quot;&gt;
&lt;blockquote&gt;Example request:&lt;/blockquote&gt;


&lt;div class=&quot;bash-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-bash&quot;&gt;curl --request DELETE \
    &quot;http://tickets-api.test/api/v1/authors/1&quot; \
    --header &quot;Authorization: Bearer {YOUR_AUTH_KEY}&quot; \
    --header &quot;Content-Type: application/json&quot; \
    --header &quot;Accept: application/json&quot;&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;


&lt;div class=&quot;javascript-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-javascript&quot;&gt;const url = new URL(
    &quot;http://tickets-api.test/api/v1/authors/1&quot;
);

const headers = {
    &quot;Authorization&quot;: &quot;Bearer {YOUR_AUTH_KEY}&quot;,
    &quot;Content-Type&quot;: &quot;application/json&quot;,
    &quot;Accept&quot;: &quot;application/json&quot;,
};

fetch(url, {
    method: &quot;DELETE&quot;,
    headers,
}).then(response =&amp;gt; response.json());&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;

&lt;/span&gt;

&lt;span id=&quot;example-responses-DELETEapi-v1-authors--id-&quot;&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-results-DELETEapi-v1-authors--id-&quot; hidden&gt;
    &lt;blockquote&gt;Received response&lt;span
                id=&quot;execution-response-status-DELETEapi-v1-authors--id-&quot;&gt;&lt;/span&gt;:
    &lt;/blockquote&gt;
    &lt;pre class=&quot;json&quot;&gt;&lt;code id=&quot;execution-response-content-DELETEapi-v1-authors--id-&quot;
      data-empty-response-text=&quot;&lt;Empty response&gt;&quot; style=&quot;max-height: 400px;&quot;&gt;&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-error-DELETEapi-v1-authors--id-&quot; hidden&gt;
    &lt;blockquote&gt;Request failed with error:&lt;/blockquote&gt;
    &lt;pre&gt;&lt;code id=&quot;execution-error-message-DELETEapi-v1-authors--id-&quot;&gt;

Tip: Check that you&amp;#039;re properly connected to the network.
If you&amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;form id=&quot;form-DELETEapi-v1-authors--id-&quot; data-method=&quot;DELETE&quot;
      data-path=&quot;api/v1/authors/{id}&quot;
      data-authed=&quot;1&quot;
      data-hasfiles=&quot;0&quot;
      data-isarraybody=&quot;0&quot;
      autocomplete=&quot;off&quot;
      onsubmit=&quot;event.preventDefault(); executeTryOut(&#039;DELETEapi-v1-authors--id-&#039;, this);&quot;&gt;
    &lt;h3&gt;
        Request&amp;nbsp;&amp;nbsp;&amp;nbsp;
                    &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-tryout-DELETEapi-v1-authors--id-&quot;
                    onclick=&quot;tryItOut(&#039;DELETEapi-v1-authors--id-&#039;);&quot;&gt;Try it out ⚡
            &lt;/button&gt;
            &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-canceltryout-DELETEapi-v1-authors--id-&quot;
                    onclick=&quot;cancelTryOut(&#039;DELETEapi-v1-authors--id-&#039;);&quot; hidden&gt;Cancel 🛑
            &lt;/button&gt;&amp;nbsp;&amp;nbsp;
            &lt;button type=&quot;submit&quot;
                    style=&quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-executetryout-DELETEapi-v1-authors--id-&quot;
                    data-initial-text=&quot;Send Request 💥&quot;
                    data-loading-text=&quot;⏱ Sending...&quot;
                    hidden&gt;Send Request 💥
            &lt;/button&gt;
            &lt;/h3&gt;
            &lt;p&gt;
            &lt;small class=&quot;badge badge-red&quot;&gt;DELETE&lt;/small&gt;
            &lt;b&gt;&lt;code&gt;api/v1/authors/{id}&lt;/code&gt;&lt;/b&gt;
        &lt;/p&gt;
                &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Headers&lt;/b&gt;&lt;/h4&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Authorization&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Authorization&quot; class=&quot;auth-value&quot;               data-endpoint=&quot;DELETEapi-v1-authors--id-&quot;
               value=&quot;Bearer {YOUR_AUTH_KEY}&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;Bearer {YOUR_AUTH_KEY}&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Content-Type&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Content-Type&quot;                data-endpoint=&quot;DELETEapi-v1-authors--id-&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Accept&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Accept&quot;                data-endpoint=&quot;DELETEapi-v1-authors--id-&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                        &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;URL Parameters&lt;/b&gt;&lt;/h4&gt;
                    &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;id&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;integer&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;number&quot; style=&quot;display: none&quot;
               step=&quot;any&quot;               name=&quot;id&quot;                data-endpoint=&quot;DELETEapi-v1-authors--id-&quot;
               value=&quot;1&quot;
               data-component=&quot;url&quot;&gt;
    &lt;br&gt;
&lt;p&gt;The ID of the author. Example: &lt;code&gt;1&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                    &lt;/form&gt;

                    &lt;h2 id=&quot;endpoints-GETapi-v1-authors--author_id--tickets&quot;&gt;GET api/v1/authors/{author_id}/tickets&lt;/h2&gt;

&lt;p&gt;
&lt;small class=&quot;badge badge-darkred&quot;&gt;requires authentication&lt;/small&gt;
&lt;/p&gt;



&lt;span id=&quot;example-requests-GETapi-v1-authors--author_id--tickets&quot;&gt;
&lt;blockquote&gt;Example request:&lt;/blockquote&gt;


&lt;div class=&quot;bash-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-bash&quot;&gt;curl --request GET \
    --get &quot;http://tickets-api.test/api/v1/authors/1/tickets&quot; \
    --header &quot;Authorization: Bearer {YOUR_AUTH_KEY}&quot; \
    --header &quot;Content-Type: application/json&quot; \
    --header &quot;Accept: application/json&quot;&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;


&lt;div class=&quot;javascript-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-javascript&quot;&gt;const url = new URL(
    &quot;http://tickets-api.test/api/v1/authors/1/tickets&quot;
);

const headers = {
    &quot;Authorization&quot;: &quot;Bearer {YOUR_AUTH_KEY}&quot;,
    &quot;Content-Type&quot;: &quot;application/json&quot;,
    &quot;Accept&quot;: &quot;application/json&quot;,
};

fetch(url, {
    method: &quot;GET&quot;,
    headers,
}).then(response =&amp;gt; response.json());&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;

&lt;/span&gt;

&lt;span id=&quot;example-responses-GETapi-v1-authors--author_id--tickets&quot;&gt;
            &lt;blockquote&gt;
            &lt;p&gt;Example response (200):&lt;/p&gt;
        &lt;/blockquote&gt;
                &lt;details class=&quot;annotation&quot;&gt;
            &lt;summary style=&quot;cursor: pointer;&quot;&gt;
                &lt;small onclick=&quot;textContent = parentElement.parentElement.open ? &#039;Show headers&#039; : &#039;Hide headers&#039;&quot;&gt;Show headers&lt;/small&gt;
            &lt;/summary&gt;
            &lt;pre&gt;&lt;code class=&quot;language-http&quot;&gt;cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 &lt;/code&gt;&lt;/pre&gt;&lt;/details&gt;         &lt;pre&gt;

&lt;code class=&quot;language-json&quot; style=&quot;max-height: 300px;&quot;&gt;{
    &amp;quot;data&amp;quot;: [
        {
            &amp;quot;type&amp;quot;: &amp;quot;ticket&amp;quot;,
            &amp;quot;id&amp;quot;: 30,
            &amp;quot;attributes&amp;quot;: {
                &amp;quot;title&amp;quot;: &amp;quot;Changed title 29 may&amp;quot;,
                &amp;quot;status&amp;quot;: &amp;quot;C&amp;quot;,
                &amp;quot;created_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;,
                &amp;quot;updated_at&amp;quot;: &amp;quot;2024-05-29T22:51:29.000000Z&amp;quot;
            },
            &amp;quot;relationships&amp;quot;: {
                &amp;quot;author&amp;quot;: {
                    &amp;quot;data&amp;quot;: {
                        &amp;quot;type&amp;quot;: &amp;quot;user&amp;quot;,
                        &amp;quot;id&amp;quot;: 1
                    },
                    &amp;quot;links&amp;quot;: {
                        &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors/1&amp;quot;
                    }
                }
            },
            &amp;quot;links&amp;quot;: {
                &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/tickets/30&amp;quot;
            }
        },
        {
            &amp;quot;type&amp;quot;: &amp;quot;ticket&amp;quot;,
            &amp;quot;id&amp;quot;: 35,
            &amp;quot;attributes&amp;quot;: {
                &amp;quot;title&amp;quot;: &amp;quot;doloremque ipsa officiis&amp;quot;,
                &amp;quot;status&amp;quot;: &amp;quot;X&amp;quot;,
                &amp;quot;created_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;,
                &amp;quot;updated_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;
            },
            &amp;quot;relationships&amp;quot;: {
                &amp;quot;author&amp;quot;: {
                    &amp;quot;data&amp;quot;: {
                        &amp;quot;type&amp;quot;: &amp;quot;user&amp;quot;,
                        &amp;quot;id&amp;quot;: 1
                    },
                    &amp;quot;links&amp;quot;: {
                        &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors/1&amp;quot;
                    }
                }
            },
            &amp;quot;links&amp;quot;: {
                &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/tickets/35&amp;quot;
            }
        },
        {
            &amp;quot;type&amp;quot;: &amp;quot;ticket&amp;quot;,
            &amp;quot;id&amp;quot;: 44,
            &amp;quot;attributes&amp;quot;: {
                &amp;quot;title&amp;quot;: &amp;quot;saepe possimus id&amp;quot;,
                &amp;quot;status&amp;quot;: &amp;quot;H&amp;quot;,
                &amp;quot;created_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;,
                &amp;quot;updated_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;
            },
            &amp;quot;relationships&amp;quot;: {
                &amp;quot;author&amp;quot;: {
                    &amp;quot;data&amp;quot;: {
                        &amp;quot;type&amp;quot;: &amp;quot;user&amp;quot;,
                        &amp;quot;id&amp;quot;: 1
                    },
                    &amp;quot;links&amp;quot;: {
                        &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors/1&amp;quot;
                    }
                }
            },
            &amp;quot;links&amp;quot;: {
                &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/tickets/44&amp;quot;
            }
        },
        {
            &amp;quot;type&amp;quot;: &amp;quot;ticket&amp;quot;,
            &amp;quot;id&amp;quot;: 46,
            &amp;quot;attributes&amp;quot;: {
                &amp;quot;title&amp;quot;: &amp;quot;dolores occaecati officia&amp;quot;,
                &amp;quot;status&amp;quot;: &amp;quot;A&amp;quot;,
                &amp;quot;created_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;,
                &amp;quot;updated_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;
            },
            &amp;quot;relationships&amp;quot;: {
                &amp;quot;author&amp;quot;: {
                    &amp;quot;data&amp;quot;: {
                        &amp;quot;type&amp;quot;: &amp;quot;user&amp;quot;,
                        &amp;quot;id&amp;quot;: 1
                    },
                    &amp;quot;links&amp;quot;: {
                        &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors/1&amp;quot;
                    }
                }
            },
            &amp;quot;links&amp;quot;: {
                &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/tickets/46&amp;quot;
            }
        },
        {
            &amp;quot;type&amp;quot;: &amp;quot;ticket&amp;quot;,
            &amp;quot;id&amp;quot;: 48,
            &amp;quot;attributes&amp;quot;: {
                &amp;quot;title&amp;quot;: &amp;quot;neque error quia&amp;quot;,
                &amp;quot;status&amp;quot;: &amp;quot;A&amp;quot;,
                &amp;quot;created_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;,
                &amp;quot;updated_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;
            },
            &amp;quot;relationships&amp;quot;: {
                &amp;quot;author&amp;quot;: {
                    &amp;quot;data&amp;quot;: {
                        &amp;quot;type&amp;quot;: &amp;quot;user&amp;quot;,
                        &amp;quot;id&amp;quot;: 1
                    },
                    &amp;quot;links&amp;quot;: {
                        &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors/1&amp;quot;
                    }
                }
            },
            &amp;quot;links&amp;quot;: {
                &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/tickets/48&amp;quot;
            }
        },
        {
            &amp;quot;type&amp;quot;: &amp;quot;ticket&amp;quot;,
            &amp;quot;id&amp;quot;: 49,
            &amp;quot;attributes&amp;quot;: {
                &amp;quot;title&amp;quot;: &amp;quot;totam illum nihil&amp;quot;,
                &amp;quot;status&amp;quot;: &amp;quot;H&amp;quot;,
                &amp;quot;created_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;,
                &amp;quot;updated_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;
            },
            &amp;quot;relationships&amp;quot;: {
                &amp;quot;author&amp;quot;: {
                    &amp;quot;data&amp;quot;: {
                        &amp;quot;type&amp;quot;: &amp;quot;user&amp;quot;,
                        &amp;quot;id&amp;quot;: 1
                    },
                    &amp;quot;links&amp;quot;: {
                        &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors/1&amp;quot;
                    }
                }
            },
            &amp;quot;links&amp;quot;: {
                &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/tickets/49&amp;quot;
            }
        },
        {
            &amp;quot;type&amp;quot;: &amp;quot;ticket&amp;quot;,
            &amp;quot;id&amp;quot;: 50,
            &amp;quot;attributes&amp;quot;: {
                &amp;quot;title&amp;quot;: &amp;quot;perferendis placeat quia&amp;quot;,
                &amp;quot;status&amp;quot;: &amp;quot;X&amp;quot;,
                &amp;quot;created_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;,
                &amp;quot;updated_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;
            },
            &amp;quot;relationships&amp;quot;: {
                &amp;quot;author&amp;quot;: {
                    &amp;quot;data&amp;quot;: {
                        &amp;quot;type&amp;quot;: &amp;quot;user&amp;quot;,
                        &amp;quot;id&amp;quot;: 1
                    },
                    &amp;quot;links&amp;quot;: {
                        &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors/1&amp;quot;
                    }
                }
            },
            &amp;quot;links&amp;quot;: {
                &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/tickets/50&amp;quot;
            }
        },
        {
            &amp;quot;type&amp;quot;: &amp;quot;ticket&amp;quot;,
            &amp;quot;id&amp;quot;: 52,
            &amp;quot;attributes&amp;quot;: {
                &amp;quot;title&amp;quot;: &amp;quot;ea earum est&amp;quot;,
                &amp;quot;status&amp;quot;: &amp;quot;X&amp;quot;,
                &amp;quot;created_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;,
                &amp;quot;updated_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;
            },
            &amp;quot;relationships&amp;quot;: {
                &amp;quot;author&amp;quot;: {
                    &amp;quot;data&amp;quot;: {
                        &amp;quot;type&amp;quot;: &amp;quot;user&amp;quot;,
                        &amp;quot;id&amp;quot;: 1
                    },
                    &amp;quot;links&amp;quot;: {
                        &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors/1&amp;quot;
                    }
                }
            },
            &amp;quot;links&amp;quot;: {
                &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/tickets/52&amp;quot;
            }
        },
        {
            &amp;quot;type&amp;quot;: &amp;quot;ticket&amp;quot;,
            &amp;quot;id&amp;quot;: 53,
            &amp;quot;attributes&amp;quot;: {
                &amp;quot;title&amp;quot;: &amp;quot;blanditiis similique at&amp;quot;,
                &amp;quot;status&amp;quot;: &amp;quot;A&amp;quot;,
                &amp;quot;created_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;,
                &amp;quot;updated_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;
            },
            &amp;quot;relationships&amp;quot;: {
                &amp;quot;author&amp;quot;: {
                    &amp;quot;data&amp;quot;: {
                        &amp;quot;type&amp;quot;: &amp;quot;user&amp;quot;,
                        &amp;quot;id&amp;quot;: 1
                    },
                    &amp;quot;links&amp;quot;: {
                        &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors/1&amp;quot;
                    }
                }
            },
            &amp;quot;links&amp;quot;: {
                &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/tickets/53&amp;quot;
            }
        },
        {
            &amp;quot;type&amp;quot;: &amp;quot;ticket&amp;quot;,
            &amp;quot;id&amp;quot;: 62,
            &amp;quot;attributes&amp;quot;: {
                &amp;quot;title&amp;quot;: &amp;quot;non quod qui&amp;quot;,
                &amp;quot;status&amp;quot;: &amp;quot;X&amp;quot;,
                &amp;quot;created_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;,
                &amp;quot;updated_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;
            },
            &amp;quot;relationships&amp;quot;: {
                &amp;quot;author&amp;quot;: {
                    &amp;quot;data&amp;quot;: {
                        &amp;quot;type&amp;quot;: &amp;quot;user&amp;quot;,
                        &amp;quot;id&amp;quot;: 1
                    },
                    &amp;quot;links&amp;quot;: {
                        &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors/1&amp;quot;
                    }
                }
            },
            &amp;quot;links&amp;quot;: {
                &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/tickets/62&amp;quot;
            }
        },
        {
            &amp;quot;type&amp;quot;: &amp;quot;ticket&amp;quot;,
            &amp;quot;id&amp;quot;: 73,
            &amp;quot;attributes&amp;quot;: {
                &amp;quot;title&amp;quot;: &amp;quot;dolorem deserunt facilis&amp;quot;,
                &amp;quot;status&amp;quot;: &amp;quot;C&amp;quot;,
                &amp;quot;created_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;,
                &amp;quot;updated_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;
            },
            &amp;quot;relationships&amp;quot;: {
                &amp;quot;author&amp;quot;: {
                    &amp;quot;data&amp;quot;: {
                        &amp;quot;type&amp;quot;: &amp;quot;user&amp;quot;,
                        &amp;quot;id&amp;quot;: 1
                    },
                    &amp;quot;links&amp;quot;: {
                        &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors/1&amp;quot;
                    }
                }
            },
            &amp;quot;links&amp;quot;: {
                &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/tickets/73&amp;quot;
            }
        },
        {
            &amp;quot;type&amp;quot;: &amp;quot;ticket&amp;quot;,
            &amp;quot;id&amp;quot;: 81,
            &amp;quot;attributes&amp;quot;: {
                &amp;quot;title&amp;quot;: &amp;quot;nihil non provident&amp;quot;,
                &amp;quot;status&amp;quot;: &amp;quot;A&amp;quot;,
                &amp;quot;created_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;,
                &amp;quot;updated_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;
            },
            &amp;quot;relationships&amp;quot;: {
                &amp;quot;author&amp;quot;: {
                    &amp;quot;data&amp;quot;: {
                        &amp;quot;type&amp;quot;: &amp;quot;user&amp;quot;,
                        &amp;quot;id&amp;quot;: 1
                    },
                    &amp;quot;links&amp;quot;: {
                        &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors/1&amp;quot;
                    }
                }
            },
            &amp;quot;links&amp;quot;: {
                &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/tickets/81&amp;quot;
            }
        },
        {
            &amp;quot;type&amp;quot;: &amp;quot;ticket&amp;quot;,
            &amp;quot;id&amp;quot;: 89,
            &amp;quot;attributes&amp;quot;: {
                &amp;quot;title&amp;quot;: &amp;quot;odio dolores laborum&amp;quot;,
                &amp;quot;status&amp;quot;: &amp;quot;H&amp;quot;,
                &amp;quot;created_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;,
                &amp;quot;updated_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;
            },
            &amp;quot;relationships&amp;quot;: {
                &amp;quot;author&amp;quot;: {
                    &amp;quot;data&amp;quot;: {
                        &amp;quot;type&amp;quot;: &amp;quot;user&amp;quot;,
                        &amp;quot;id&amp;quot;: 1
                    },
                    &amp;quot;links&amp;quot;: {
                        &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors/1&amp;quot;
                    }
                }
            },
            &amp;quot;links&amp;quot;: {
                &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/tickets/89&amp;quot;
            }
        },
        {
            &amp;quot;type&amp;quot;: &amp;quot;ticket&amp;quot;,
            &amp;quot;id&amp;quot;: 92,
            &amp;quot;attributes&amp;quot;: {
                &amp;quot;title&amp;quot;: &amp;quot;aliquid ullam minima&amp;quot;,
                &amp;quot;status&amp;quot;: &amp;quot;A&amp;quot;,
                &amp;quot;created_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;,
                &amp;quot;updated_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;
            },
            &amp;quot;relationships&amp;quot;: {
                &amp;quot;author&amp;quot;: {
                    &amp;quot;data&amp;quot;: {
                        &amp;quot;type&amp;quot;: &amp;quot;user&amp;quot;,
                        &amp;quot;id&amp;quot;: 1
                    },
                    &amp;quot;links&amp;quot;: {
                        &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors/1&amp;quot;
                    }
                }
            },
            &amp;quot;links&amp;quot;: {
                &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/tickets/92&amp;quot;
            }
        },
        {
            &amp;quot;type&amp;quot;: &amp;quot;ticket&amp;quot;,
            &amp;quot;id&amp;quot;: 97,
            &amp;quot;attributes&amp;quot;: {
                &amp;quot;title&amp;quot;: &amp;quot;distinctio omnis qui&amp;quot;,
                &amp;quot;status&amp;quot;: &amp;quot;H&amp;quot;,
                &amp;quot;created_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;,
                &amp;quot;updated_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;
            },
            &amp;quot;relationships&amp;quot;: {
                &amp;quot;author&amp;quot;: {
                    &amp;quot;data&amp;quot;: {
                        &amp;quot;type&amp;quot;: &amp;quot;user&amp;quot;,
                        &amp;quot;id&amp;quot;: 1
                    },
                    &amp;quot;links&amp;quot;: {
                        &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors/1&amp;quot;
                    }
                }
            },
            &amp;quot;links&amp;quot;: {
                &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/tickets/97&amp;quot;
            }
        }
    ],
    &amp;quot;links&amp;quot;: {
        &amp;quot;first&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors/1/tickets?page=1&amp;quot;,
        &amp;quot;last&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors/1/tickets?page=2&amp;quot;,
        &amp;quot;prev&amp;quot;: null,
        &amp;quot;next&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors/1/tickets?page=2&amp;quot;
    },
    &amp;quot;meta&amp;quot;: {
        &amp;quot;current_page&amp;quot;: 1,
        &amp;quot;from&amp;quot;: 1,
        &amp;quot;last_page&amp;quot;: 2,
        &amp;quot;links&amp;quot;: [
            {
                &amp;quot;url&amp;quot;: null,
                &amp;quot;label&amp;quot;: &amp;quot;&amp;amp;laquo; Previous&amp;quot;,
                &amp;quot;active&amp;quot;: false
            },
            {
                &amp;quot;url&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors/1/tickets?page=1&amp;quot;,
                &amp;quot;label&amp;quot;: &amp;quot;1&amp;quot;,
                &amp;quot;active&amp;quot;: true
            },
            {
                &amp;quot;url&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors/1/tickets?page=2&amp;quot;,
                &amp;quot;label&amp;quot;: &amp;quot;2&amp;quot;,
                &amp;quot;active&amp;quot;: false
            },
            {
                &amp;quot;url&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors/1/tickets?page=2&amp;quot;,
                &amp;quot;label&amp;quot;: &amp;quot;Next &amp;amp;raquo;&amp;quot;,
                &amp;quot;active&amp;quot;: false
            }
        ],
        &amp;quot;path&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors/1/tickets&amp;quot;,
        &amp;quot;per_page&amp;quot;: 15,
        &amp;quot;to&amp;quot;: 15,
        &amp;quot;total&amp;quot;: 17
    }
}&lt;/code&gt;
 &lt;/pre&gt;
    &lt;/span&gt;
&lt;span id=&quot;execution-results-GETapi-v1-authors--author_id--tickets&quot; hidden&gt;
    &lt;blockquote&gt;Received response&lt;span
                id=&quot;execution-response-status-GETapi-v1-authors--author_id--tickets&quot;&gt;&lt;/span&gt;:
    &lt;/blockquote&gt;
    &lt;pre class=&quot;json&quot;&gt;&lt;code id=&quot;execution-response-content-GETapi-v1-authors--author_id--tickets&quot;
      data-empty-response-text=&quot;&lt;Empty response&gt;&quot; style=&quot;max-height: 400px;&quot;&gt;&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-error-GETapi-v1-authors--author_id--tickets&quot; hidden&gt;
    &lt;blockquote&gt;Request failed with error:&lt;/blockquote&gt;
    &lt;pre&gt;&lt;code id=&quot;execution-error-message-GETapi-v1-authors--author_id--tickets&quot;&gt;

Tip: Check that you&amp;#039;re properly connected to the network.
If you&amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;form id=&quot;form-GETapi-v1-authors--author_id--tickets&quot; data-method=&quot;GET&quot;
      data-path=&quot;api/v1/authors/{author_id}/tickets&quot;
      data-authed=&quot;1&quot;
      data-hasfiles=&quot;0&quot;
      data-isarraybody=&quot;0&quot;
      autocomplete=&quot;off&quot;
      onsubmit=&quot;event.preventDefault(); executeTryOut(&#039;GETapi-v1-authors--author_id--tickets&#039;, this);&quot;&gt;
    &lt;h3&gt;
        Request&amp;nbsp;&amp;nbsp;&amp;nbsp;
                    &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-tryout-GETapi-v1-authors--author_id--tickets&quot;
                    onclick=&quot;tryItOut(&#039;GETapi-v1-authors--author_id--tickets&#039;);&quot;&gt;Try it out ⚡
            &lt;/button&gt;
            &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-canceltryout-GETapi-v1-authors--author_id--tickets&quot;
                    onclick=&quot;cancelTryOut(&#039;GETapi-v1-authors--author_id--tickets&#039;);&quot; hidden&gt;Cancel 🛑
            &lt;/button&gt;&amp;nbsp;&amp;nbsp;
            &lt;button type=&quot;submit&quot;
                    style=&quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-executetryout-GETapi-v1-authors--author_id--tickets&quot;
                    data-initial-text=&quot;Send Request 💥&quot;
                    data-loading-text=&quot;⏱ Sending...&quot;
                    hidden&gt;Send Request 💥
            &lt;/button&gt;
            &lt;/h3&gt;
            &lt;p&gt;
            &lt;small class=&quot;badge badge-green&quot;&gt;GET&lt;/small&gt;
            &lt;b&gt;&lt;code&gt;api/v1/authors/{author_id}/tickets&lt;/code&gt;&lt;/b&gt;
        &lt;/p&gt;
                &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Headers&lt;/b&gt;&lt;/h4&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Authorization&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Authorization&quot; class=&quot;auth-value&quot;               data-endpoint=&quot;GETapi-v1-authors--author_id--tickets&quot;
               value=&quot;Bearer {YOUR_AUTH_KEY}&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;Bearer {YOUR_AUTH_KEY}&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Content-Type&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Content-Type&quot;                data-endpoint=&quot;GETapi-v1-authors--author_id--tickets&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Accept&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Accept&quot;                data-endpoint=&quot;GETapi-v1-authors--author_id--tickets&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                        &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;URL Parameters&lt;/b&gt;&lt;/h4&gt;
                    &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;author_id&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;integer&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;number&quot; style=&quot;display: none&quot;
               step=&quot;any&quot;               name=&quot;author_id&quot;                data-endpoint=&quot;GETapi-v1-authors--author_id--tickets&quot;
               value=&quot;1&quot;
               data-component=&quot;url&quot;&gt;
    &lt;br&gt;
&lt;p&gt;The ID of the author. Example: &lt;code&gt;1&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                    &lt;/form&gt;

                    &lt;h2 id=&quot;endpoints-POSTapi-v1-authors--author_id--tickets&quot;&gt;Store a newly created resource in storage.&lt;/h2&gt;

&lt;p&gt;
&lt;small class=&quot;badge badge-darkred&quot;&gt;requires authentication&lt;/small&gt;
&lt;/p&gt;



&lt;span id=&quot;example-requests-POSTapi-v1-authors--author_id--tickets&quot;&gt;
&lt;blockquote&gt;Example request:&lt;/blockquote&gt;


&lt;div class=&quot;bash-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-bash&quot;&gt;curl --request POST \
    &quot;http://tickets-api.test/api/v1/authors/1/tickets&quot; \
    --header &quot;Authorization: Bearer {YOUR_AUTH_KEY}&quot; \
    --header &quot;Content-Type: application/json&quot; \
    --header &quot;Accept: application/json&quot; \
    --data &quot;{
    \&quot;data\&quot;: {
        \&quot;attributes\&quot;: {
            \&quot;title\&quot;: \&quot;No example\&quot;,
            \&quot;description\&quot;: \&quot;Omnis dolor fuga ab quis repellendus nobis.\&quot;,
            \&quot;status\&quot;: \&quot;C\&quot;
        }
    },
    \&quot;author\&quot;: 0
}&quot;
&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;


&lt;div class=&quot;javascript-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-javascript&quot;&gt;const url = new URL(
    &quot;http://tickets-api.test/api/v1/authors/1/tickets&quot;
);

const headers = {
    &quot;Authorization&quot;: &quot;Bearer {YOUR_AUTH_KEY}&quot;,
    &quot;Content-Type&quot;: &quot;application/json&quot;,
    &quot;Accept&quot;: &quot;application/json&quot;,
};

let body = {
    &quot;data&quot;: {
        &quot;attributes&quot;: {
            &quot;title&quot;: &quot;No example&quot;,
            &quot;description&quot;: &quot;Omnis dolor fuga ab quis repellendus nobis.&quot;,
            &quot;status&quot;: &quot;C&quot;
        }
    },
    &quot;author&quot;: 0
};

fetch(url, {
    method: &quot;POST&quot;,
    headers,
    body: JSON.stringify(body),
}).then(response =&amp;gt; response.json());&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;

&lt;/span&gt;

&lt;span id=&quot;example-responses-POSTapi-v1-authors--author_id--tickets&quot;&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-results-POSTapi-v1-authors--author_id--tickets&quot; hidden&gt;
    &lt;blockquote&gt;Received response&lt;span
                id=&quot;execution-response-status-POSTapi-v1-authors--author_id--tickets&quot;&gt;&lt;/span&gt;:
    &lt;/blockquote&gt;
    &lt;pre class=&quot;json&quot;&gt;&lt;code id=&quot;execution-response-content-POSTapi-v1-authors--author_id--tickets&quot;
      data-empty-response-text=&quot;&lt;Empty response&gt;&quot; style=&quot;max-height: 400px;&quot;&gt;&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-error-POSTapi-v1-authors--author_id--tickets&quot; hidden&gt;
    &lt;blockquote&gt;Request failed with error:&lt;/blockquote&gt;
    &lt;pre&gt;&lt;code id=&quot;execution-error-message-POSTapi-v1-authors--author_id--tickets&quot;&gt;

Tip: Check that you&amp;#039;re properly connected to the network.
If you&amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;form id=&quot;form-POSTapi-v1-authors--author_id--tickets&quot; data-method=&quot;POST&quot;
      data-path=&quot;api/v1/authors/{author_id}/tickets&quot;
      data-authed=&quot;1&quot;
      data-hasfiles=&quot;0&quot;
      data-isarraybody=&quot;0&quot;
      autocomplete=&quot;off&quot;
      onsubmit=&quot;event.preventDefault(); executeTryOut(&#039;POSTapi-v1-authors--author_id--tickets&#039;, this);&quot;&gt;
    &lt;h3&gt;
        Request&amp;nbsp;&amp;nbsp;&amp;nbsp;
                    &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-tryout-POSTapi-v1-authors--author_id--tickets&quot;
                    onclick=&quot;tryItOut(&#039;POSTapi-v1-authors--author_id--tickets&#039;);&quot;&gt;Try it out ⚡
            &lt;/button&gt;
            &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-canceltryout-POSTapi-v1-authors--author_id--tickets&quot;
                    onclick=&quot;cancelTryOut(&#039;POSTapi-v1-authors--author_id--tickets&#039;);&quot; hidden&gt;Cancel 🛑
            &lt;/button&gt;&amp;nbsp;&amp;nbsp;
            &lt;button type=&quot;submit&quot;
                    style=&quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-executetryout-POSTapi-v1-authors--author_id--tickets&quot;
                    data-initial-text=&quot;Send Request 💥&quot;
                    data-loading-text=&quot;⏱ Sending...&quot;
                    hidden&gt;Send Request 💥
            &lt;/button&gt;
            &lt;/h3&gt;
            &lt;p&gt;
            &lt;small class=&quot;badge badge-black&quot;&gt;POST&lt;/small&gt;
            &lt;b&gt;&lt;code&gt;api/v1/authors/{author_id}/tickets&lt;/code&gt;&lt;/b&gt;
        &lt;/p&gt;
                &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Headers&lt;/b&gt;&lt;/h4&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Authorization&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Authorization&quot; class=&quot;auth-value&quot;               data-endpoint=&quot;POSTapi-v1-authors--author_id--tickets&quot;
               value=&quot;Bearer {YOUR_AUTH_KEY}&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;Bearer {YOUR_AUTH_KEY}&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Content-Type&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Content-Type&quot;                data-endpoint=&quot;POSTapi-v1-authors--author_id--tickets&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Accept&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Accept&quot;                data-endpoint=&quot;POSTapi-v1-authors--author_id--tickets&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                        &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;URL Parameters&lt;/b&gt;&lt;/h4&gt;
                    &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;author_id&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;integer&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;number&quot; style=&quot;display: none&quot;
               step=&quot;any&quot;               name=&quot;author_id&quot;                data-endpoint=&quot;POSTapi-v1-authors--author_id--tickets&quot;
               value=&quot;1&quot;
               data-component=&quot;url&quot;&gt;
    &lt;br&gt;
&lt;p&gt;The ID of the author. Example: &lt;code&gt;1&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                            &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Body Parameters&lt;/b&gt;&lt;/h4&gt;
        &lt;div style=&quot; padding-left: 28px;  clear: unset;&quot;&gt;
        &lt;details&gt;
            &lt;summary style=&quot;padding-bottom: 10px;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;data&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;object&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
&lt;br&gt;

            &lt;/summary&gt;
                                                &lt;div style=&quot; margin-left: 14px; clear: unset;&quot;&gt;
        &lt;details&gt;
            &lt;summary style=&quot;padding-bottom: 10px;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;attributes&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;object&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
&lt;br&gt;

            &lt;/summary&gt;
                                                &lt;div style=&quot;margin-left: 28px; clear: unset;&quot;&gt;
                        &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;title&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;string&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;data.attributes.title&quot;                data-endpoint=&quot;POSTapi-v1-authors--author_id--tickets&quot;
               value=&quot;No example&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;
&lt;p&gt;The title of the ticket --. Example: &lt;code&gt;No example&lt;/code&gt;&lt;/p&gt;
                    &lt;/div&gt;
                                                                &lt;div style=&quot;margin-left: 28px; clear: unset;&quot;&gt;
                        &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;description&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;string&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;data.attributes.description&quot;                data-endpoint=&quot;POSTapi-v1-authors--author_id--tickets&quot;
               value=&quot;Omnis dolor fuga ab quis repellendus nobis.&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;
&lt;p&gt;The description of the ticket. Example: &lt;code&gt;Omnis dolor fuga ab quis repellendus nobis.&lt;/code&gt;&lt;/p&gt;
                    &lt;/div&gt;
                                                                &lt;div style=&quot;margin-left: 28px; clear: unset;&quot;&gt;
                        &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;status&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;string&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;data.attributes.status&quot;                data-endpoint=&quot;POSTapi-v1-authors--author_id--tickets&quot;
               value=&quot;C&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;
&lt;p&gt;The status of the ticket. Example: &lt;code&gt;C&lt;/code&gt;&lt;/p&gt;
Must be one of:
&lt;ul style=&quot;list-style-type: square;&quot;&gt;&lt;li&gt;&lt;code&gt;A&lt;/code&gt;&lt;/li&gt; &lt;li&gt;&lt;code&gt;C&lt;/code&gt;&lt;/li&gt; &lt;li&gt;&lt;code&gt;H&lt;/code&gt;&lt;/li&gt; &lt;li&gt;&lt;code&gt;X&lt;/code&gt;&lt;/li&gt;&lt;/ul&gt;
                    &lt;/div&gt;
                                    &lt;/details&gt;
        &lt;/div&gt;
                                        &lt;/details&gt;
        &lt;/div&gt;
                &lt;div style=&quot; padding-left: 28px;  clear: unset;&quot;&gt;
            &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;author&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;integer&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;number&quot; style=&quot;display: none&quot;
               step=&quot;any&quot;               name=&quot;author&quot;                data-endpoint=&quot;POSTapi-v1-authors--author_id--tickets&quot;
               value=&quot;0&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;
&lt;p&gt;The id of the author of the ticket. Must be 13. Example: &lt;code&gt;0&lt;/code&gt;&lt;/p&gt;
        &lt;/div&gt;
        &lt;/form&gt;

                    &lt;h2 id=&quot;endpoints-DELETEapi-v1-authors--author_id--tickets--id-&quot;&gt;DELETE api/v1/authors/{author_id}/tickets/{id}&lt;/h2&gt;

&lt;p&gt;
&lt;small class=&quot;badge badge-darkred&quot;&gt;requires authentication&lt;/small&gt;
&lt;/p&gt;



&lt;span id=&quot;example-requests-DELETEapi-v1-authors--author_id--tickets--id-&quot;&gt;
&lt;blockquote&gt;Example request:&lt;/blockquote&gt;


&lt;div class=&quot;bash-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-bash&quot;&gt;curl --request DELETE \
    &quot;http://tickets-api.test/api/v1/authors/1/tickets/1&quot; \
    --header &quot;Authorization: Bearer {YOUR_AUTH_KEY}&quot; \
    --header &quot;Content-Type: application/json&quot; \
    --header &quot;Accept: application/json&quot;&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;


&lt;div class=&quot;javascript-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-javascript&quot;&gt;const url = new URL(
    &quot;http://tickets-api.test/api/v1/authors/1/tickets/1&quot;
);

const headers = {
    &quot;Authorization&quot;: &quot;Bearer {YOUR_AUTH_KEY}&quot;,
    &quot;Content-Type&quot;: &quot;application/json&quot;,
    &quot;Accept&quot;: &quot;application/json&quot;,
};

fetch(url, {
    method: &quot;DELETE&quot;,
    headers,
}).then(response =&amp;gt; response.json());&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;

&lt;/span&gt;

&lt;span id=&quot;example-responses-DELETEapi-v1-authors--author_id--tickets--id-&quot;&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-results-DELETEapi-v1-authors--author_id--tickets--id-&quot; hidden&gt;
    &lt;blockquote&gt;Received response&lt;span
                id=&quot;execution-response-status-DELETEapi-v1-authors--author_id--tickets--id-&quot;&gt;&lt;/span&gt;:
    &lt;/blockquote&gt;
    &lt;pre class=&quot;json&quot;&gt;&lt;code id=&quot;execution-response-content-DELETEapi-v1-authors--author_id--tickets--id-&quot;
      data-empty-response-text=&quot;&lt;Empty response&gt;&quot; style=&quot;max-height: 400px;&quot;&gt;&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-error-DELETEapi-v1-authors--author_id--tickets--id-&quot; hidden&gt;
    &lt;blockquote&gt;Request failed with error:&lt;/blockquote&gt;
    &lt;pre&gt;&lt;code id=&quot;execution-error-message-DELETEapi-v1-authors--author_id--tickets--id-&quot;&gt;

Tip: Check that you&amp;#039;re properly connected to the network.
If you&amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;form id=&quot;form-DELETEapi-v1-authors--author_id--tickets--id-&quot; data-method=&quot;DELETE&quot;
      data-path=&quot;api/v1/authors/{author_id}/tickets/{id}&quot;
      data-authed=&quot;1&quot;
      data-hasfiles=&quot;0&quot;
      data-isarraybody=&quot;0&quot;
      autocomplete=&quot;off&quot;
      onsubmit=&quot;event.preventDefault(); executeTryOut(&#039;DELETEapi-v1-authors--author_id--tickets--id-&#039;, this);&quot;&gt;
    &lt;h3&gt;
        Request&amp;nbsp;&amp;nbsp;&amp;nbsp;
                    &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-tryout-DELETEapi-v1-authors--author_id--tickets--id-&quot;
                    onclick=&quot;tryItOut(&#039;DELETEapi-v1-authors--author_id--tickets--id-&#039;);&quot;&gt;Try it out ⚡
            &lt;/button&gt;
            &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-canceltryout-DELETEapi-v1-authors--author_id--tickets--id-&quot;
                    onclick=&quot;cancelTryOut(&#039;DELETEapi-v1-authors--author_id--tickets--id-&#039;);&quot; hidden&gt;Cancel 🛑
            &lt;/button&gt;&amp;nbsp;&amp;nbsp;
            &lt;button type=&quot;submit&quot;
                    style=&quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-executetryout-DELETEapi-v1-authors--author_id--tickets--id-&quot;
                    data-initial-text=&quot;Send Request 💥&quot;
                    data-loading-text=&quot;⏱ Sending...&quot;
                    hidden&gt;Send Request 💥
            &lt;/button&gt;
            &lt;/h3&gt;
            &lt;p&gt;
            &lt;small class=&quot;badge badge-red&quot;&gt;DELETE&lt;/small&gt;
            &lt;b&gt;&lt;code&gt;api/v1/authors/{author_id}/tickets/{id}&lt;/code&gt;&lt;/b&gt;
        &lt;/p&gt;
                &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Headers&lt;/b&gt;&lt;/h4&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Authorization&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Authorization&quot; class=&quot;auth-value&quot;               data-endpoint=&quot;DELETEapi-v1-authors--author_id--tickets--id-&quot;
               value=&quot;Bearer {YOUR_AUTH_KEY}&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;Bearer {YOUR_AUTH_KEY}&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Content-Type&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Content-Type&quot;                data-endpoint=&quot;DELETEapi-v1-authors--author_id--tickets--id-&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Accept&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Accept&quot;                data-endpoint=&quot;DELETEapi-v1-authors--author_id--tickets--id-&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                        &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;URL Parameters&lt;/b&gt;&lt;/h4&gt;
                    &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;author_id&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;integer&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;number&quot; style=&quot;display: none&quot;
               step=&quot;any&quot;               name=&quot;author_id&quot;                data-endpoint=&quot;DELETEapi-v1-authors--author_id--tickets--id-&quot;
               value=&quot;1&quot;
               data-component=&quot;url&quot;&gt;
    &lt;br&gt;
&lt;p&gt;The ID of the author. Example: &lt;code&gt;1&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                    &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;id&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;integer&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;number&quot; style=&quot;display: none&quot;
               step=&quot;any&quot;               name=&quot;id&quot;                data-endpoint=&quot;DELETEapi-v1-authors--author_id--tickets--id-&quot;
               value=&quot;1&quot;
               data-component=&quot;url&quot;&gt;
    &lt;br&gt;
&lt;p&gt;The ID of the ticket. Example: &lt;code&gt;1&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                    &lt;/form&gt;

                    &lt;h2 id=&quot;endpoints-PUTapi-v1-authors--author_id--tickets--ticket_id-&quot;&gt;PUT api/v1/authors/{author_id}/tickets/{ticket_id}&lt;/h2&gt;

&lt;p&gt;
&lt;small class=&quot;badge badge-darkred&quot;&gt;requires authentication&lt;/small&gt;
&lt;/p&gt;



&lt;span id=&quot;example-requests-PUTapi-v1-authors--author_id--tickets--ticket_id-&quot;&gt;
&lt;blockquote&gt;Example request:&lt;/blockquote&gt;


&lt;div class=&quot;bash-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-bash&quot;&gt;curl --request PUT \
    &quot;http://tickets-api.test/api/v1/authors/1/tickets/1&quot; \
    --header &quot;Authorization: Bearer {YOUR_AUTH_KEY}&quot; \
    --header &quot;Content-Type: application/json&quot; \
    --header &quot;Accept: application/json&quot; \
    --data &quot;{
    \&quot;data\&quot;: {
        \&quot;attributes\&quot;: {
            \&quot;title\&quot;: \&quot;nostrum\&quot;,
            \&quot;description\&quot;: \&quot;Quia qui cupiditate aut consequatur ex.\&quot;,
            \&quot;status\&quot;: \&quot;X\&quot;
        },
        \&quot;relationships\&quot;: {
            \&quot;author\&quot;: {
                \&quot;data\&quot;: {
                    \&quot;id\&quot;: 3
                }
            }
        }
    }
}&quot;
&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;


&lt;div class=&quot;javascript-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-javascript&quot;&gt;const url = new URL(
    &quot;http://tickets-api.test/api/v1/authors/1/tickets/1&quot;
);

const headers = {
    &quot;Authorization&quot;: &quot;Bearer {YOUR_AUTH_KEY}&quot;,
    &quot;Content-Type&quot;: &quot;application/json&quot;,
    &quot;Accept&quot;: &quot;application/json&quot;,
};

let body = {
    &quot;data&quot;: {
        &quot;attributes&quot;: {
            &quot;title&quot;: &quot;nostrum&quot;,
            &quot;description&quot;: &quot;Quia qui cupiditate aut consequatur ex.&quot;,
            &quot;status&quot;: &quot;X&quot;
        },
        &quot;relationships&quot;: {
            &quot;author&quot;: {
                &quot;data&quot;: {
                    &quot;id&quot;: 3
                }
            }
        }
    }
};

fetch(url, {
    method: &quot;PUT&quot;,
    headers,
    body: JSON.stringify(body),
}).then(response =&amp;gt; response.json());&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;

&lt;/span&gt;

&lt;span id=&quot;example-responses-PUTapi-v1-authors--author_id--tickets--ticket_id-&quot;&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-results-PUTapi-v1-authors--author_id--tickets--ticket_id-&quot; hidden&gt;
    &lt;blockquote&gt;Received response&lt;span
                id=&quot;execution-response-status-PUTapi-v1-authors--author_id--tickets--ticket_id-&quot;&gt;&lt;/span&gt;:
    &lt;/blockquote&gt;
    &lt;pre class=&quot;json&quot;&gt;&lt;code id=&quot;execution-response-content-PUTapi-v1-authors--author_id--tickets--ticket_id-&quot;
      data-empty-response-text=&quot;&lt;Empty response&gt;&quot; style=&quot;max-height: 400px;&quot;&gt;&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-error-PUTapi-v1-authors--author_id--tickets--ticket_id-&quot; hidden&gt;
    &lt;blockquote&gt;Request failed with error:&lt;/blockquote&gt;
    &lt;pre&gt;&lt;code id=&quot;execution-error-message-PUTapi-v1-authors--author_id--tickets--ticket_id-&quot;&gt;

Tip: Check that you&amp;#039;re properly connected to the network.
If you&amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;form id=&quot;form-PUTapi-v1-authors--author_id--tickets--ticket_id-&quot; data-method=&quot;PUT&quot;
      data-path=&quot;api/v1/authors/{author_id}/tickets/{ticket_id}&quot;
      data-authed=&quot;1&quot;
      data-hasfiles=&quot;0&quot;
      data-isarraybody=&quot;0&quot;
      autocomplete=&quot;off&quot;
      onsubmit=&quot;event.preventDefault(); executeTryOut(&#039;PUTapi-v1-authors--author_id--tickets--ticket_id-&#039;, this);&quot;&gt;
    &lt;h3&gt;
        Request&amp;nbsp;&amp;nbsp;&amp;nbsp;
                    &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-tryout-PUTapi-v1-authors--author_id--tickets--ticket_id-&quot;
                    onclick=&quot;tryItOut(&#039;PUTapi-v1-authors--author_id--tickets--ticket_id-&#039;);&quot;&gt;Try it out ⚡
            &lt;/button&gt;
            &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-canceltryout-PUTapi-v1-authors--author_id--tickets--ticket_id-&quot;
                    onclick=&quot;cancelTryOut(&#039;PUTapi-v1-authors--author_id--tickets--ticket_id-&#039;);&quot; hidden&gt;Cancel 🛑
            &lt;/button&gt;&amp;nbsp;&amp;nbsp;
            &lt;button type=&quot;submit&quot;
                    style=&quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-executetryout-PUTapi-v1-authors--author_id--tickets--ticket_id-&quot;
                    data-initial-text=&quot;Send Request 💥&quot;
                    data-loading-text=&quot;⏱ Sending...&quot;
                    hidden&gt;Send Request 💥
            &lt;/button&gt;
            &lt;/h3&gt;
            &lt;p&gt;
            &lt;small class=&quot;badge badge-darkblue&quot;&gt;PUT&lt;/small&gt;
            &lt;b&gt;&lt;code&gt;api/v1/authors/{author_id}/tickets/{ticket_id}&lt;/code&gt;&lt;/b&gt;
        &lt;/p&gt;
                &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Headers&lt;/b&gt;&lt;/h4&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Authorization&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Authorization&quot; class=&quot;auth-value&quot;               data-endpoint=&quot;PUTapi-v1-authors--author_id--tickets--ticket_id-&quot;
               value=&quot;Bearer {YOUR_AUTH_KEY}&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;Bearer {YOUR_AUTH_KEY}&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Content-Type&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Content-Type&quot;                data-endpoint=&quot;PUTapi-v1-authors--author_id--tickets--ticket_id-&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Accept&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Accept&quot;                data-endpoint=&quot;PUTapi-v1-authors--author_id--tickets--ticket_id-&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                        &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;URL Parameters&lt;/b&gt;&lt;/h4&gt;
                    &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;author_id&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;integer&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;number&quot; style=&quot;display: none&quot;
               step=&quot;any&quot;               name=&quot;author_id&quot;                data-endpoint=&quot;PUTapi-v1-authors--author_id--tickets--ticket_id-&quot;
               value=&quot;1&quot;
               data-component=&quot;url&quot;&gt;
    &lt;br&gt;
&lt;p&gt;The ID of the author. Example: &lt;code&gt;1&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                    &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;ticket_id&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;integer&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;number&quot; style=&quot;display: none&quot;
               step=&quot;any&quot;               name=&quot;ticket_id&quot;                data-endpoint=&quot;PUTapi-v1-authors--author_id--tickets--ticket_id-&quot;
               value=&quot;1&quot;
               data-component=&quot;url&quot;&gt;
    &lt;br&gt;
&lt;p&gt;The ID of the ticket. Example: &lt;code&gt;1&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                            &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Body Parameters&lt;/b&gt;&lt;/h4&gt;
        &lt;div style=&quot; padding-left: 28px;  clear: unset;&quot;&gt;
        &lt;details&gt;
            &lt;summary style=&quot;padding-bottom: 10px;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;data&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;object&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
&lt;br&gt;

            &lt;/summary&gt;
                                                &lt;div style=&quot; margin-left: 14px; clear: unset;&quot;&gt;
        &lt;details&gt;
            &lt;summary style=&quot;padding-bottom: 10px;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;attributes&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;object&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
&lt;br&gt;

            &lt;/summary&gt;
                                                &lt;div style=&quot;margin-left: 28px; clear: unset;&quot;&gt;
                        &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;title&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;string&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;data.attributes.title&quot;                data-endpoint=&quot;PUTapi-v1-authors--author_id--tickets--ticket_id-&quot;
               value=&quot;nostrum&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;nostrum&lt;/code&gt;&lt;/p&gt;
                    &lt;/div&gt;
                                                                &lt;div style=&quot;margin-left: 28px; clear: unset;&quot;&gt;
                        &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;description&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;string&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;data.attributes.description&quot;                data-endpoint=&quot;PUTapi-v1-authors--author_id--tickets--ticket_id-&quot;
               value=&quot;Quia qui cupiditate aut consequatur ex.&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;Quia qui cupiditate aut consequatur ex.&lt;/code&gt;&lt;/p&gt;
                    &lt;/div&gt;
                                                                &lt;div style=&quot;margin-left: 28px; clear: unset;&quot;&gt;
                        &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;status&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;string&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;data.attributes.status&quot;                data-endpoint=&quot;PUTapi-v1-authors--author_id--tickets--ticket_id-&quot;
               value=&quot;X&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;X&lt;/code&gt;&lt;/p&gt;
Must be one of:
&lt;ul style=&quot;list-style-type: square;&quot;&gt;&lt;li&gt;&lt;code&gt;A&lt;/code&gt;&lt;/li&gt; &lt;li&gt;&lt;code&gt;C&lt;/code&gt;&lt;/li&gt; &lt;li&gt;&lt;code&gt;H&lt;/code&gt;&lt;/li&gt; &lt;li&gt;&lt;code&gt;X&lt;/code&gt;&lt;/li&gt;&lt;/ul&gt;
                    &lt;/div&gt;
                                    &lt;/details&gt;
        &lt;/div&gt;
                                                                    &lt;div style=&quot; margin-left: 14px; clear: unset;&quot;&gt;
        &lt;details&gt;
            &lt;summary style=&quot;padding-bottom: 10px;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;relationships&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;object&lt;/small&gt;&amp;nbsp;
&lt;i&gt;optional&lt;/i&gt; &amp;nbsp;
&lt;br&gt;

            &lt;/summary&gt;
                                                &lt;div style=&quot; margin-left: 28px; clear: unset;&quot;&gt;
        &lt;details&gt;
            &lt;summary style=&quot;padding-bottom: 10px;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;author&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;object&lt;/small&gt;&amp;nbsp;
&lt;i&gt;optional&lt;/i&gt; &amp;nbsp;
&lt;br&gt;

            &lt;/summary&gt;
                                                &lt;div style=&quot; margin-left: 42px; clear: unset;&quot;&gt;
        &lt;details&gt;
            &lt;summary style=&quot;padding-bottom: 10px;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;data&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;object&lt;/small&gt;&amp;nbsp;
&lt;i&gt;optional&lt;/i&gt; &amp;nbsp;
&lt;br&gt;

            &lt;/summary&gt;
                                                &lt;div style=&quot;margin-left: 56px; clear: unset;&quot;&gt;
                        &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;id&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;integer&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;number&quot; style=&quot;display: none&quot;
               step=&quot;any&quot;               name=&quot;data.relationships.author.data.id&quot;                data-endpoint=&quot;PUTapi-v1-authors--author_id--tickets--ticket_id-&quot;
               value=&quot;3&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;3&lt;/code&gt;&lt;/p&gt;
                    &lt;/div&gt;
                                    &lt;/details&gt;
        &lt;/div&gt;
                                        &lt;/details&gt;
        &lt;/div&gt;
                                        &lt;/details&gt;
        &lt;/div&gt;
                                        &lt;/details&gt;
        &lt;/div&gt;
        &lt;/form&gt;

                    &lt;h2 id=&quot;endpoints-PATCHapi-v1-authors--author_id--tickets--ticket_id-&quot;&gt;PATCH api/v1/authors/{author_id}/tickets/{ticket_id}&lt;/h2&gt;

&lt;p&gt;
&lt;small class=&quot;badge badge-darkred&quot;&gt;requires authentication&lt;/small&gt;
&lt;/p&gt;



&lt;span id=&quot;example-requests-PATCHapi-v1-authors--author_id--tickets--ticket_id-&quot;&gt;
&lt;blockquote&gt;Example request:&lt;/blockquote&gt;


&lt;div class=&quot;bash-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-bash&quot;&gt;curl --request PATCH \
    &quot;http://tickets-api.test/api/v1/authors/1/tickets/1&quot; \
    --header &quot;Authorization: Bearer {YOUR_AUTH_KEY}&quot; \
    --header &quot;Content-Type: application/json&quot; \
    --header &quot;Accept: application/json&quot; \
    --data &quot;{
    \&quot;data\&quot;: {
        \&quot;attributes\&quot;: {
            \&quot;title\&quot;: \&quot;alias\&quot;,
            \&quot;description\&quot;: \&quot;Ut quae fuga eveniet rerum exercitationem atque nihil.\&quot;,
            \&quot;status\&quot;: \&quot;C\&quot;
        },
        \&quot;relationships\&quot;: {
            \&quot;author\&quot;: {
                \&quot;data\&quot;: []
            }
        }
    }
}&quot;
&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;


&lt;div class=&quot;javascript-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-javascript&quot;&gt;const url = new URL(
    &quot;http://tickets-api.test/api/v1/authors/1/tickets/1&quot;
);

const headers = {
    &quot;Authorization&quot;: &quot;Bearer {YOUR_AUTH_KEY}&quot;,
    &quot;Content-Type&quot;: &quot;application/json&quot;,
    &quot;Accept&quot;: &quot;application/json&quot;,
};

let body = {
    &quot;data&quot;: {
        &quot;attributes&quot;: {
            &quot;title&quot;: &quot;alias&quot;,
            &quot;description&quot;: &quot;Ut quae fuga eveniet rerum exercitationem atque nihil.&quot;,
            &quot;status&quot;: &quot;C&quot;
        },
        &quot;relationships&quot;: {
            &quot;author&quot;: {
                &quot;data&quot;: []
            }
        }
    }
};

fetch(url, {
    method: &quot;PATCH&quot;,
    headers,
    body: JSON.stringify(body),
}).then(response =&amp;gt; response.json());&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;

&lt;/span&gt;

&lt;span id=&quot;example-responses-PATCHapi-v1-authors--author_id--tickets--ticket_id-&quot;&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-results-PATCHapi-v1-authors--author_id--tickets--ticket_id-&quot; hidden&gt;
    &lt;blockquote&gt;Received response&lt;span
                id=&quot;execution-response-status-PATCHapi-v1-authors--author_id--tickets--ticket_id-&quot;&gt;&lt;/span&gt;:
    &lt;/blockquote&gt;
    &lt;pre class=&quot;json&quot;&gt;&lt;code id=&quot;execution-response-content-PATCHapi-v1-authors--author_id--tickets--ticket_id-&quot;
      data-empty-response-text=&quot;&lt;Empty response&gt;&quot; style=&quot;max-height: 400px;&quot;&gt;&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-error-PATCHapi-v1-authors--author_id--tickets--ticket_id-&quot; hidden&gt;
    &lt;blockquote&gt;Request failed with error:&lt;/blockquote&gt;
    &lt;pre&gt;&lt;code id=&quot;execution-error-message-PATCHapi-v1-authors--author_id--tickets--ticket_id-&quot;&gt;

Tip: Check that you&amp;#039;re properly connected to the network.
If you&amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;form id=&quot;form-PATCHapi-v1-authors--author_id--tickets--ticket_id-&quot; data-method=&quot;PATCH&quot;
      data-path=&quot;api/v1/authors/{author_id}/tickets/{ticket_id}&quot;
      data-authed=&quot;1&quot;
      data-hasfiles=&quot;0&quot;
      data-isarraybody=&quot;0&quot;
      autocomplete=&quot;off&quot;
      onsubmit=&quot;event.preventDefault(); executeTryOut(&#039;PATCHapi-v1-authors--author_id--tickets--ticket_id-&#039;, this);&quot;&gt;
    &lt;h3&gt;
        Request&amp;nbsp;&amp;nbsp;&amp;nbsp;
                    &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-tryout-PATCHapi-v1-authors--author_id--tickets--ticket_id-&quot;
                    onclick=&quot;tryItOut(&#039;PATCHapi-v1-authors--author_id--tickets--ticket_id-&#039;);&quot;&gt;Try it out ⚡
            &lt;/button&gt;
            &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-canceltryout-PATCHapi-v1-authors--author_id--tickets--ticket_id-&quot;
                    onclick=&quot;cancelTryOut(&#039;PATCHapi-v1-authors--author_id--tickets--ticket_id-&#039;);&quot; hidden&gt;Cancel 🛑
            &lt;/button&gt;&amp;nbsp;&amp;nbsp;
            &lt;button type=&quot;submit&quot;
                    style=&quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-executetryout-PATCHapi-v1-authors--author_id--tickets--ticket_id-&quot;
                    data-initial-text=&quot;Send Request 💥&quot;
                    data-loading-text=&quot;⏱ Sending...&quot;
                    hidden&gt;Send Request 💥
            &lt;/button&gt;
            &lt;/h3&gt;
            &lt;p&gt;
            &lt;small class=&quot;badge badge-purple&quot;&gt;PATCH&lt;/small&gt;
            &lt;b&gt;&lt;code&gt;api/v1/authors/{author_id}/tickets/{ticket_id}&lt;/code&gt;&lt;/b&gt;
        &lt;/p&gt;
                &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Headers&lt;/b&gt;&lt;/h4&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Authorization&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Authorization&quot; class=&quot;auth-value&quot;               data-endpoint=&quot;PATCHapi-v1-authors--author_id--tickets--ticket_id-&quot;
               value=&quot;Bearer {YOUR_AUTH_KEY}&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;Bearer {YOUR_AUTH_KEY}&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Content-Type&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Content-Type&quot;                data-endpoint=&quot;PATCHapi-v1-authors--author_id--tickets--ticket_id-&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Accept&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Accept&quot;                data-endpoint=&quot;PATCHapi-v1-authors--author_id--tickets--ticket_id-&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                        &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;URL Parameters&lt;/b&gt;&lt;/h4&gt;
                    &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;author_id&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;integer&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;number&quot; style=&quot;display: none&quot;
               step=&quot;any&quot;               name=&quot;author_id&quot;                data-endpoint=&quot;PATCHapi-v1-authors--author_id--tickets--ticket_id-&quot;
               value=&quot;1&quot;
               data-component=&quot;url&quot;&gt;
    &lt;br&gt;
&lt;p&gt;The ID of the author. Example: &lt;code&gt;1&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                    &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;ticket_id&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;integer&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;number&quot; style=&quot;display: none&quot;
               step=&quot;any&quot;               name=&quot;ticket_id&quot;                data-endpoint=&quot;PATCHapi-v1-authors--author_id--tickets--ticket_id-&quot;
               value=&quot;1&quot;
               data-component=&quot;url&quot;&gt;
    &lt;br&gt;
&lt;p&gt;The ID of the ticket. Example: &lt;code&gt;1&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                            &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Body Parameters&lt;/b&gt;&lt;/h4&gt;
        &lt;div style=&quot; padding-left: 28px;  clear: unset;&quot;&gt;
        &lt;details&gt;
            &lt;summary style=&quot;padding-bottom: 10px;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;data&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;object&lt;/small&gt;&amp;nbsp;
&lt;i&gt;optional&lt;/i&gt; &amp;nbsp;
&lt;br&gt;

            &lt;/summary&gt;
                                                &lt;div style=&quot; margin-left: 14px; clear: unset;&quot;&gt;
        &lt;details&gt;
            &lt;summary style=&quot;padding-bottom: 10px;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;attributes&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;object&lt;/small&gt;&amp;nbsp;
&lt;i&gt;optional&lt;/i&gt; &amp;nbsp;
&lt;br&gt;

            &lt;/summary&gt;
                                                &lt;div style=&quot;margin-left: 28px; clear: unset;&quot;&gt;
                        &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;title&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;string&lt;/small&gt;&amp;nbsp;
&lt;i&gt;optional&lt;/i&gt; &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;data.attributes.title&quot;                data-endpoint=&quot;PATCHapi-v1-authors--author_id--tickets--ticket_id-&quot;
               value=&quot;alias&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;alias&lt;/code&gt;&lt;/p&gt;
                    &lt;/div&gt;
                                                                &lt;div style=&quot;margin-left: 28px; clear: unset;&quot;&gt;
                        &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;description&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;string&lt;/small&gt;&amp;nbsp;
&lt;i&gt;optional&lt;/i&gt; &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;data.attributes.description&quot;                data-endpoint=&quot;PATCHapi-v1-authors--author_id--tickets--ticket_id-&quot;
               value=&quot;Ut quae fuga eveniet rerum exercitationem atque nihil.&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;Ut quae fuga eveniet rerum exercitationem atque nihil.&lt;/code&gt;&lt;/p&gt;
                    &lt;/div&gt;
                                                                &lt;div style=&quot;margin-left: 28px; clear: unset;&quot;&gt;
                        &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;status&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;string&lt;/small&gt;&amp;nbsp;
&lt;i&gt;optional&lt;/i&gt; &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;data.attributes.status&quot;                data-endpoint=&quot;PATCHapi-v1-authors--author_id--tickets--ticket_id-&quot;
               value=&quot;C&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;C&lt;/code&gt;&lt;/p&gt;
Must be one of:
&lt;ul style=&quot;list-style-type: square;&quot;&gt;&lt;li&gt;&lt;code&gt;A&lt;/code&gt;&lt;/li&gt; &lt;li&gt;&lt;code&gt;C&lt;/code&gt;&lt;/li&gt; &lt;li&gt;&lt;code&gt;H&lt;/code&gt;&lt;/li&gt; &lt;li&gt;&lt;code&gt;X&lt;/code&gt;&lt;/li&gt;&lt;/ul&gt;
                    &lt;/div&gt;
                                    &lt;/details&gt;
        &lt;/div&gt;
                                                                    &lt;div style=&quot; margin-left: 14px; clear: unset;&quot;&gt;
        &lt;details&gt;
            &lt;summary style=&quot;padding-bottom: 10px;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;relationships&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;object&lt;/small&gt;&amp;nbsp;
&lt;i&gt;optional&lt;/i&gt; &amp;nbsp;
&lt;br&gt;

            &lt;/summary&gt;
                                                &lt;div style=&quot; margin-left: 28px; clear: unset;&quot;&gt;
        &lt;details&gt;
            &lt;summary style=&quot;padding-bottom: 10px;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;author&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;object&lt;/small&gt;&amp;nbsp;
&lt;i&gt;optional&lt;/i&gt; &amp;nbsp;
&lt;br&gt;

            &lt;/summary&gt;
                                                &lt;div style=&quot; margin-left: 42px; clear: unset;&quot;&gt;
        &lt;details&gt;
            &lt;summary style=&quot;padding-bottom: 10px;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;data&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;object&lt;/small&gt;&amp;nbsp;
&lt;i&gt;optional&lt;/i&gt; &amp;nbsp;
&lt;br&gt;

            &lt;/summary&gt;
                                                &lt;div style=&quot;margin-left: 56px; clear: unset;&quot;&gt;
                        &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;id&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;string&lt;/small&gt;&amp;nbsp;
&lt;i&gt;optional&lt;/i&gt; &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;data.relationships.author.data.id&quot;                data-endpoint=&quot;PATCHapi-v1-authors--author_id--tickets--ticket_id-&quot;
               value=&quot;&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;

                    &lt;/div&gt;
                                    &lt;/details&gt;
        &lt;/div&gt;
                                        &lt;/details&gt;
        &lt;/div&gt;
                                        &lt;/details&gt;
        &lt;/div&gt;
                                        &lt;/details&gt;
        &lt;/div&gt;
        &lt;/form&gt;

                &lt;h1 id=&quot;managing-tickets&quot;&gt;Managing Tickets&lt;/h1&gt;

    

                                &lt;h2 id=&quot;managing-tickets-GETapi-v1-tickets&quot;&gt;Get All Tickets.&lt;/h2&gt;

&lt;p&gt;
&lt;small class=&quot;badge badge-darkred&quot;&gt;requires authentication&lt;/small&gt;
&lt;/p&gt;



&lt;span id=&quot;example-requests-GETapi-v1-tickets&quot;&gt;
&lt;blockquote&gt;Example request:&lt;/blockquote&gt;


&lt;div class=&quot;bash-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-bash&quot;&gt;curl --request GET \
    --get &quot;http://tickets-api.test/api/v1/tickets?sort=sort%3Dtitle%2C-created_at&amp;amp;filter%5Bstatus%5D=fugiat&amp;amp;filter%5Btitle%5D=filter%5Btitle%5D%3D%2Afix%2A&quot; \
    --header &quot;Authorization: Bearer {YOUR_AUTH_KEY}&quot; \
    --header &quot;Content-Type: application/json&quot; \
    --header &quot;Accept: application/json&quot;&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;


&lt;div class=&quot;javascript-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-javascript&quot;&gt;const url = new URL(
    &quot;http://tickets-api.test/api/v1/tickets&quot;
);

const params = {
    &quot;sort&quot;: &quot;sort=title,-created_at&quot;,
    &quot;filter[status]&quot;: &quot;fugiat&quot;,
    &quot;filter[title]&quot;: &quot;filter[title]=*fix*&quot;,
};
Object.keys(params)
    .forEach(key =&amp;gt; url.searchParams.append(key, params[key]));

const headers = {
    &quot;Authorization&quot;: &quot;Bearer {YOUR_AUTH_KEY}&quot;,
    &quot;Content-Type&quot;: &quot;application/json&quot;,
    &quot;Accept&quot;: &quot;application/json&quot;,
};

fetch(url, {
    method: &quot;GET&quot;,
    headers,
}).then(response =&amp;gt; response.json());&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;

&lt;/span&gt;

&lt;span id=&quot;example-responses-GETapi-v1-tickets&quot;&gt;
            &lt;blockquote&gt;
            &lt;p&gt;Example response (200):&lt;/p&gt;
        &lt;/blockquote&gt;
                &lt;details class=&quot;annotation&quot;&gt;
            &lt;summary style=&quot;cursor: pointer;&quot;&gt;
                &lt;small onclick=&quot;textContent = parentElement.parentElement.open ? &#039;Show headers&#039; : &#039;Hide headers&#039;&quot;&gt;Show headers&lt;/small&gt;
            &lt;/summary&gt;
            &lt;pre&gt;&lt;code class=&quot;language-http&quot;&gt;cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 &lt;/code&gt;&lt;/pre&gt;&lt;/details&gt;         &lt;pre&gt;

&lt;code class=&quot;language-json&quot; style=&quot;max-height: 300px;&quot;&gt;{
    &amp;quot;data&amp;quot;: [
        {
            &amp;quot;type&amp;quot;: &amp;quot;ticket&amp;quot;,
            &amp;quot;id&amp;quot;: 103,
            &amp;quot;attributes&amp;quot;: {
                &amp;quot;title&amp;quot;: &amp;quot;Replace this title 28 - Test 2&amp;quot;,
                &amp;quot;status&amp;quot;: &amp;quot;A&amp;quot;,
                &amp;quot;created_at&amp;quot;: &amp;quot;2024-05-28T21:38:51.000000Z&amp;quot;,
                &amp;quot;updated_at&amp;quot;: &amp;quot;2024-05-28T21:38:51.000000Z&amp;quot;
            },
            &amp;quot;relationships&amp;quot;: {
                &amp;quot;author&amp;quot;: {
                    &amp;quot;data&amp;quot;: {
                        &amp;quot;type&amp;quot;: &amp;quot;user&amp;quot;,
                        &amp;quot;id&amp;quot;: 1
                    },
                    &amp;quot;links&amp;quot;: {
                        &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors/1&amp;quot;
                    }
                }
            },
            &amp;quot;links&amp;quot;: {
                &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/tickets/103&amp;quot;
            }
        },
        {
            &amp;quot;type&amp;quot;: &amp;quot;ticket&amp;quot;,
            &amp;quot;id&amp;quot;: 101,
            &amp;quot;attributes&amp;quot;: {
                &amp;quot;title&amp;quot;: &amp;quot;Replace this title&amp;quot;,
                &amp;quot;status&amp;quot;: &amp;quot;A&amp;quot;,
                &amp;quot;created_at&amp;quot;: &amp;quot;2024-05-28T21:18:59.000000Z&amp;quot;,
                &amp;quot;updated_at&amp;quot;: &amp;quot;2024-05-28T21:18:59.000000Z&amp;quot;
            },
            &amp;quot;relationships&amp;quot;: {
                &amp;quot;author&amp;quot;: {
                    &amp;quot;data&amp;quot;: {
                        &amp;quot;type&amp;quot;: &amp;quot;user&amp;quot;,
                        &amp;quot;id&amp;quot;: 1
                    },
                    &amp;quot;links&amp;quot;: {
                        &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors/1&amp;quot;
                    }
                }
            },
            &amp;quot;links&amp;quot;: {
                &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/tickets/101&amp;quot;
            }
        },
        {
            &amp;quot;type&amp;quot;: &amp;quot;ticket&amp;quot;,
            &amp;quot;id&amp;quot;: 3,
            &amp;quot;attributes&amp;quot;: {
                &amp;quot;title&amp;quot;: &amp;quot;consectetur modi in&amp;quot;,
                &amp;quot;status&amp;quot;: &amp;quot;H&amp;quot;,
                &amp;quot;created_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;,
                &amp;quot;updated_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;
            },
            &amp;quot;relationships&amp;quot;: {
                &amp;quot;author&amp;quot;: {
                    &amp;quot;data&amp;quot;: {
                        &amp;quot;type&amp;quot;: &amp;quot;user&amp;quot;,
                        &amp;quot;id&amp;quot;: 2
                    },
                    &amp;quot;links&amp;quot;: {
                        &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors/2&amp;quot;
                    }
                }
            },
            &amp;quot;links&amp;quot;: {
                &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/tickets/3&amp;quot;
            }
        },
        {
            &amp;quot;type&amp;quot;: &amp;quot;ticket&amp;quot;,
            &amp;quot;id&amp;quot;: 4,
            &amp;quot;attributes&amp;quot;: {
                &amp;quot;title&amp;quot;: &amp;quot;harum similique rerum&amp;quot;,
                &amp;quot;status&amp;quot;: &amp;quot;C&amp;quot;,
                &amp;quot;created_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;,
                &amp;quot;updated_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;
            },
            &amp;quot;relationships&amp;quot;: {
                &amp;quot;author&amp;quot;: {
                    &amp;quot;data&amp;quot;: {
                        &amp;quot;type&amp;quot;: &amp;quot;user&amp;quot;,
                        &amp;quot;id&amp;quot;: 8
                    },
                    &amp;quot;links&amp;quot;: {
                        &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors/8&amp;quot;
                    }
                }
            },
            &amp;quot;links&amp;quot;: {
                &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/tickets/4&amp;quot;
            }
        },
        {
            &amp;quot;type&amp;quot;: &amp;quot;ticket&amp;quot;,
            &amp;quot;id&amp;quot;: 5,
            &amp;quot;attributes&amp;quot;: {
                &amp;quot;title&amp;quot;: &amp;quot;et maiores repellendus&amp;quot;,
                &amp;quot;status&amp;quot;: &amp;quot;X&amp;quot;,
                &amp;quot;created_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;,
                &amp;quot;updated_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;
            },
            &amp;quot;relationships&amp;quot;: {
                &amp;quot;author&amp;quot;: {
                    &amp;quot;data&amp;quot;: {
                        &amp;quot;type&amp;quot;: &amp;quot;user&amp;quot;,
                        &amp;quot;id&amp;quot;: 2
                    },
                    &amp;quot;links&amp;quot;: {
                        &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors/2&amp;quot;
                    }
                }
            },
            &amp;quot;links&amp;quot;: {
                &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/tickets/5&amp;quot;
            }
        },
        {
            &amp;quot;type&amp;quot;: &amp;quot;ticket&amp;quot;,
            &amp;quot;id&amp;quot;: 6,
            &amp;quot;attributes&amp;quot;: {
                &amp;quot;title&amp;quot;: &amp;quot;Changed title 29 may&amp;quot;,
                &amp;quot;status&amp;quot;: &amp;quot;C&amp;quot;,
                &amp;quot;created_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;,
                &amp;quot;updated_at&amp;quot;: &amp;quot;2024-05-29T22:50:36.000000Z&amp;quot;
            },
            &amp;quot;relationships&amp;quot;: {
                &amp;quot;author&amp;quot;: {
                    &amp;quot;data&amp;quot;: {
                        &amp;quot;type&amp;quot;: &amp;quot;user&amp;quot;,
                        &amp;quot;id&amp;quot;: 2
                    },
                    &amp;quot;links&amp;quot;: {
                        &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors/2&amp;quot;
                    }
                }
            },
            &amp;quot;links&amp;quot;: {
                &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/tickets/6&amp;quot;
            }
        },
        {
            &amp;quot;type&amp;quot;: &amp;quot;ticket&amp;quot;,
            &amp;quot;id&amp;quot;: 7,
            &amp;quot;attributes&amp;quot;: {
                &amp;quot;title&amp;quot;: &amp;quot;qui adipisci qui&amp;quot;,
                &amp;quot;status&amp;quot;: &amp;quot;X&amp;quot;,
                &amp;quot;created_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;,
                &amp;quot;updated_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;
            },
            &amp;quot;relationships&amp;quot;: {
                &amp;quot;author&amp;quot;: {
                    &amp;quot;data&amp;quot;: {
                        &amp;quot;type&amp;quot;: &amp;quot;user&amp;quot;,
                        &amp;quot;id&amp;quot;: 8
                    },
                    &amp;quot;links&amp;quot;: {
                        &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors/8&amp;quot;
                    }
                }
            },
            &amp;quot;links&amp;quot;: {
                &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/tickets/7&amp;quot;
            }
        },
        {
            &amp;quot;type&amp;quot;: &amp;quot;ticket&amp;quot;,
            &amp;quot;id&amp;quot;: 8,
            &amp;quot;attributes&amp;quot;: {
                &amp;quot;title&amp;quot;: &amp;quot;dolores voluptas dolorem&amp;quot;,
                &amp;quot;status&amp;quot;: &amp;quot;C&amp;quot;,
                &amp;quot;created_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;,
                &amp;quot;updated_at&amp;quot;: &amp;quot;2024-05-29T22:54:03.000000Z&amp;quot;
            },
            &amp;quot;relationships&amp;quot;: {
                &amp;quot;author&amp;quot;: {
                    &amp;quot;data&amp;quot;: {
                        &amp;quot;type&amp;quot;: &amp;quot;user&amp;quot;,
                        &amp;quot;id&amp;quot;: 3
                    },
                    &amp;quot;links&amp;quot;: {
                        &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors/3&amp;quot;
                    }
                }
            },
            &amp;quot;links&amp;quot;: {
                &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/tickets/8&amp;quot;
            }
        },
        {
            &amp;quot;type&amp;quot;: &amp;quot;ticket&amp;quot;,
            &amp;quot;id&amp;quot;: 9,
            &amp;quot;attributes&amp;quot;: {
                &amp;quot;title&amp;quot;: &amp;quot;repudiandae sunt est&amp;quot;,
                &amp;quot;status&amp;quot;: &amp;quot;X&amp;quot;,
                &amp;quot;created_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;,
                &amp;quot;updated_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;
            },
            &amp;quot;relationships&amp;quot;: {
                &amp;quot;author&amp;quot;: {
                    &amp;quot;data&amp;quot;: {
                        &amp;quot;type&amp;quot;: &amp;quot;user&amp;quot;,
                        &amp;quot;id&amp;quot;: 6
                    },
                    &amp;quot;links&amp;quot;: {
                        &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors/6&amp;quot;
                    }
                }
            },
            &amp;quot;links&amp;quot;: {
                &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/tickets/9&amp;quot;
            }
        },
        {
            &amp;quot;type&amp;quot;: &amp;quot;ticket&amp;quot;,
            &amp;quot;id&amp;quot;: 10,
            &amp;quot;attributes&amp;quot;: {
                &amp;quot;title&amp;quot;: &amp;quot;eveniet architecto recusandae&amp;quot;,
                &amp;quot;status&amp;quot;: &amp;quot;H&amp;quot;,
                &amp;quot;created_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;,
                &amp;quot;updated_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;
            },
            &amp;quot;relationships&amp;quot;: {
                &amp;quot;author&amp;quot;: {
                    &amp;quot;data&amp;quot;: {
                        &amp;quot;type&amp;quot;: &amp;quot;user&amp;quot;,
                        &amp;quot;id&amp;quot;: 8
                    },
                    &amp;quot;links&amp;quot;: {
                        &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors/8&amp;quot;
                    }
                }
            },
            &amp;quot;links&amp;quot;: {
                &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/tickets/10&amp;quot;
            }
        },
        {
            &amp;quot;type&amp;quot;: &amp;quot;ticket&amp;quot;,
            &amp;quot;id&amp;quot;: 11,
            &amp;quot;attributes&amp;quot;: {
                &amp;quot;title&amp;quot;: &amp;quot;recusandae dolore nihil&amp;quot;,
                &amp;quot;status&amp;quot;: &amp;quot;A&amp;quot;,
                &amp;quot;created_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;,
                &amp;quot;updated_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;
            },
            &amp;quot;relationships&amp;quot;: {
                &amp;quot;author&amp;quot;: {
                    &amp;quot;data&amp;quot;: {
                        &amp;quot;type&amp;quot;: &amp;quot;user&amp;quot;,
                        &amp;quot;id&amp;quot;: 5
                    },
                    &amp;quot;links&amp;quot;: {
                        &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors/5&amp;quot;
                    }
                }
            },
            &amp;quot;links&amp;quot;: {
                &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/tickets/11&amp;quot;
            }
        },
        {
            &amp;quot;type&amp;quot;: &amp;quot;ticket&amp;quot;,
            &amp;quot;id&amp;quot;: 12,
            &amp;quot;attributes&amp;quot;: {
                &amp;quot;title&amp;quot;: &amp;quot;odio quia quae&amp;quot;,
                &amp;quot;status&amp;quot;: &amp;quot;H&amp;quot;,
                &amp;quot;created_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;,
                &amp;quot;updated_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;
            },
            &amp;quot;relationships&amp;quot;: {
                &amp;quot;author&amp;quot;: {
                    &amp;quot;data&amp;quot;: {
                        &amp;quot;type&amp;quot;: &amp;quot;user&amp;quot;,
                        &amp;quot;id&amp;quot;: 8
                    },
                    &amp;quot;links&amp;quot;: {
                        &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors/8&amp;quot;
                    }
                }
            },
            &amp;quot;links&amp;quot;: {
                &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/tickets/12&amp;quot;
            }
        },
        {
            &amp;quot;type&amp;quot;: &amp;quot;ticket&amp;quot;,
            &amp;quot;id&amp;quot;: 13,
            &amp;quot;attributes&amp;quot;: {
                &amp;quot;title&amp;quot;: &amp;quot;nisi nobis eaque&amp;quot;,
                &amp;quot;status&amp;quot;: &amp;quot;A&amp;quot;,
                &amp;quot;created_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;,
                &amp;quot;updated_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;
            },
            &amp;quot;relationships&amp;quot;: {
                &amp;quot;author&amp;quot;: {
                    &amp;quot;data&amp;quot;: {
                        &amp;quot;type&amp;quot;: &amp;quot;user&amp;quot;,
                        &amp;quot;id&amp;quot;: 6
                    },
                    &amp;quot;links&amp;quot;: {
                        &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors/6&amp;quot;
                    }
                }
            },
            &amp;quot;links&amp;quot;: {
                &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/tickets/13&amp;quot;
            }
        },
        {
            &amp;quot;type&amp;quot;: &amp;quot;ticket&amp;quot;,
            &amp;quot;id&amp;quot;: 14,
            &amp;quot;attributes&amp;quot;: {
                &amp;quot;title&amp;quot;: &amp;quot;asperiores doloremque qui&amp;quot;,
                &amp;quot;status&amp;quot;: &amp;quot;A&amp;quot;,
                &amp;quot;created_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;,
                &amp;quot;updated_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;
            },
            &amp;quot;relationships&amp;quot;: {
                &amp;quot;author&amp;quot;: {
                    &amp;quot;data&amp;quot;: {
                        &amp;quot;type&amp;quot;: &amp;quot;user&amp;quot;,
                        &amp;quot;id&amp;quot;: 4
                    },
                    &amp;quot;links&amp;quot;: {
                        &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors/4&amp;quot;
                    }
                }
            },
            &amp;quot;links&amp;quot;: {
                &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/tickets/14&amp;quot;
            }
        },
        {
            &amp;quot;type&amp;quot;: &amp;quot;ticket&amp;quot;,
            &amp;quot;id&amp;quot;: 15,
            &amp;quot;attributes&amp;quot;: {
                &amp;quot;title&amp;quot;: &amp;quot;odio officiis est&amp;quot;,
                &amp;quot;status&amp;quot;: &amp;quot;A&amp;quot;,
                &amp;quot;created_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;,
                &amp;quot;updated_at&amp;quot;: &amp;quot;2024-05-15T22:36:40.000000Z&amp;quot;
            },
            &amp;quot;relationships&amp;quot;: {
                &amp;quot;author&amp;quot;: {
                    &amp;quot;data&amp;quot;: {
                        &amp;quot;type&amp;quot;: &amp;quot;user&amp;quot;,
                        &amp;quot;id&amp;quot;: 6
                    },
                    &amp;quot;links&amp;quot;: {
                        &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/authors/6&amp;quot;
                    }
                }
            },
            &amp;quot;links&amp;quot;: {
                &amp;quot;self&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/tickets/15&amp;quot;
            }
        }
    ],
    &amp;quot;links&amp;quot;: {
        &amp;quot;first&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/tickets?page=1&amp;quot;,
        &amp;quot;last&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/tickets?page=7&amp;quot;,
        &amp;quot;prev&amp;quot;: null,
        &amp;quot;next&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/tickets?page=2&amp;quot;
    },
    &amp;quot;meta&amp;quot;: {
        &amp;quot;current_page&amp;quot;: 1,
        &amp;quot;from&amp;quot;: 1,
        &amp;quot;last_page&amp;quot;: 7,
        &amp;quot;links&amp;quot;: [
            {
                &amp;quot;url&amp;quot;: null,
                &amp;quot;label&amp;quot;: &amp;quot;&amp;amp;laquo; Previous&amp;quot;,
                &amp;quot;active&amp;quot;: false
            },
            {
                &amp;quot;url&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/tickets?page=1&amp;quot;,
                &amp;quot;label&amp;quot;: &amp;quot;1&amp;quot;,
                &amp;quot;active&amp;quot;: true
            },
            {
                &amp;quot;url&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/tickets?page=2&amp;quot;,
                &amp;quot;label&amp;quot;: &amp;quot;2&amp;quot;,
                &amp;quot;active&amp;quot;: false
            },
            {
                &amp;quot;url&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/tickets?page=3&amp;quot;,
                &amp;quot;label&amp;quot;: &amp;quot;3&amp;quot;,
                &amp;quot;active&amp;quot;: false
            },
            {
                &amp;quot;url&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/tickets?page=4&amp;quot;,
                &amp;quot;label&amp;quot;: &amp;quot;4&amp;quot;,
                &amp;quot;active&amp;quot;: false
            },
            {
                &amp;quot;url&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/tickets?page=5&amp;quot;,
                &amp;quot;label&amp;quot;: &amp;quot;5&amp;quot;,
                &amp;quot;active&amp;quot;: false
            },
            {
                &amp;quot;url&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/tickets?page=6&amp;quot;,
                &amp;quot;label&amp;quot;: &amp;quot;6&amp;quot;,
                &amp;quot;active&amp;quot;: false
            },
            {
                &amp;quot;url&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/tickets?page=7&amp;quot;,
                &amp;quot;label&amp;quot;: &amp;quot;7&amp;quot;,
                &amp;quot;active&amp;quot;: false
            },
            {
                &amp;quot;url&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/tickets?page=2&amp;quot;,
                &amp;quot;label&amp;quot;: &amp;quot;Next &amp;amp;raquo;&amp;quot;,
                &amp;quot;active&amp;quot;: false
            }
        ],
        &amp;quot;path&amp;quot;: &amp;quot;http://tickets-api.test/api/v1/tickets&amp;quot;,
        &amp;quot;per_page&amp;quot;: 15,
        &amp;quot;to&amp;quot;: 15,
        &amp;quot;total&amp;quot;: 101
    }
}&lt;/code&gt;
 &lt;/pre&gt;
    &lt;/span&gt;
&lt;span id=&quot;execution-results-GETapi-v1-tickets&quot; hidden&gt;
    &lt;blockquote&gt;Received response&lt;span
                id=&quot;execution-response-status-GETapi-v1-tickets&quot;&gt;&lt;/span&gt;:
    &lt;/blockquote&gt;
    &lt;pre class=&quot;json&quot;&gt;&lt;code id=&quot;execution-response-content-GETapi-v1-tickets&quot;
      data-empty-response-text=&quot;&lt;Empty response&gt;&quot; style=&quot;max-height: 400px;&quot;&gt;&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-error-GETapi-v1-tickets&quot; hidden&gt;
    &lt;blockquote&gt;Request failed with error:&lt;/blockquote&gt;
    &lt;pre&gt;&lt;code id=&quot;execution-error-message-GETapi-v1-tickets&quot;&gt;

Tip: Check that you&amp;#039;re properly connected to the network.
If you&amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;form id=&quot;form-GETapi-v1-tickets&quot; data-method=&quot;GET&quot;
      data-path=&quot;api/v1/tickets&quot;
      data-authed=&quot;1&quot;
      data-hasfiles=&quot;0&quot;
      data-isarraybody=&quot;0&quot;
      autocomplete=&quot;off&quot;
      onsubmit=&quot;event.preventDefault(); executeTryOut(&#039;GETapi-v1-tickets&#039;, this);&quot;&gt;
    &lt;h3&gt;
        Request&amp;nbsp;&amp;nbsp;&amp;nbsp;
                    &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-tryout-GETapi-v1-tickets&quot;
                    onclick=&quot;tryItOut(&#039;GETapi-v1-tickets&#039;);&quot;&gt;Try it out ⚡
            &lt;/button&gt;
            &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-canceltryout-GETapi-v1-tickets&quot;
                    onclick=&quot;cancelTryOut(&#039;GETapi-v1-tickets&#039;);&quot; hidden&gt;Cancel 🛑
            &lt;/button&gt;&amp;nbsp;&amp;nbsp;
            &lt;button type=&quot;submit&quot;
                    style=&quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-executetryout-GETapi-v1-tickets&quot;
                    data-initial-text=&quot;Send Request 💥&quot;
                    data-loading-text=&quot;⏱ Sending...&quot;
                    hidden&gt;Send Request 💥
            &lt;/button&gt;
            &lt;/h3&gt;
            &lt;p&gt;
            &lt;small class=&quot;badge badge-green&quot;&gt;GET&lt;/small&gt;
            &lt;b&gt;&lt;code&gt;api/v1/tickets&lt;/code&gt;&lt;/b&gt;
        &lt;/p&gt;
                &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Headers&lt;/b&gt;&lt;/h4&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Authorization&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Authorization&quot; class=&quot;auth-value&quot;               data-endpoint=&quot;GETapi-v1-tickets&quot;
               value=&quot;Bearer {YOUR_AUTH_KEY}&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;Bearer {YOUR_AUTH_KEY}&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Content-Type&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Content-Type&quot;                data-endpoint=&quot;GETapi-v1-tickets&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Accept&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Accept&quot;                data-endpoint=&quot;GETapi-v1-tickets&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                            &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Query Parameters&lt;/b&gt;&lt;/h4&gt;
                                    &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;sort&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;string&lt;/small&gt;&amp;nbsp;
&lt;i&gt;optional&lt;/i&gt; &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;sort&quot;                data-endpoint=&quot;GETapi-v1-tickets&quot;
               value=&quot;sort=title,-created_at&quot;
               data-component=&quot;query&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Data field(s) to sort by. Separate multiple values with a commas. Denote descending order with a dash (-). Example: &lt;code&gt;sort=title,-created_at&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                    &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;filter[status]&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;string&lt;/small&gt;&amp;nbsp;
&lt;i&gt;optional&lt;/i&gt; &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;filter[status]&quot;                data-endpoint=&quot;GETapi-v1-tickets&quot;
               value=&quot;fugiat&quot;
               data-component=&quot;query&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Filter by status code: A, C, H, X. No example Example: &lt;code&gt;fugiat&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                    &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;filter[title]&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;string&lt;/small&gt;&amp;nbsp;
&lt;i&gt;optional&lt;/i&gt; &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;filter[title]&quot;                data-endpoint=&quot;GETapi-v1-tickets&quot;
               value=&quot;filter[title]=*fix*&quot;
               data-component=&quot;query&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Filter by title. Wildcard search is supported. Example: &lt;code&gt;filter[title]=*fix*&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                &lt;/form&gt;

                    &lt;h2 id=&quot;managing-tickets-POSTapi-v1-tickets&quot;&gt;Create a Ticket.&lt;/h2&gt;

&lt;p&gt;
&lt;small class=&quot;badge badge-darkred&quot;&gt;requires authentication&lt;/small&gt;
&lt;/p&gt;

&lt;p&gt;Create a new Ticket. Users can only create tickets for themselves. Managers can create tickets for other users.&lt;/p&gt;

&lt;span id=&quot;example-requests-POSTapi-v1-tickets&quot;&gt;
&lt;blockquote&gt;Example request:&lt;/blockquote&gt;


&lt;div class=&quot;bash-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-bash&quot;&gt;curl --request POST \
    &quot;http://tickets-api.test/api/v1/tickets&quot; \
    --header &quot;Authorization: Bearer {YOUR_AUTH_KEY}&quot; \
    --header &quot;Content-Type: application/json&quot; \
    --header &quot;Accept: application/json&quot; \
    --data &quot;{
    \&quot;data\&quot;: {
        \&quot;attributes\&quot;: {
            \&quot;title\&quot;: \&quot;No example\&quot;,
            \&quot;description\&quot;: \&quot;Deserunt accusantium rerum ab minima asperiores assumenda placeat.\&quot;,
            \&quot;status\&quot;: \&quot;C\&quot;
        },
        \&quot;relationships\&quot;: {
            \&quot;author\&quot;: {
                \&quot;data\&quot;: {
                    \&quot;id\&quot;: 0
                }
            }
        }
    }
}&quot;
&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;


&lt;div class=&quot;javascript-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-javascript&quot;&gt;const url = new URL(
    &quot;http://tickets-api.test/api/v1/tickets&quot;
);

const headers = {
    &quot;Authorization&quot;: &quot;Bearer {YOUR_AUTH_KEY}&quot;,
    &quot;Content-Type&quot;: &quot;application/json&quot;,
    &quot;Accept&quot;: &quot;application/json&quot;,
};

let body = {
    &quot;data&quot;: {
        &quot;attributes&quot;: {
            &quot;title&quot;: &quot;No example&quot;,
            &quot;description&quot;: &quot;Deserunt accusantium rerum ab minima asperiores assumenda placeat.&quot;,
            &quot;status&quot;: &quot;C&quot;
        },
        &quot;relationships&quot;: {
            &quot;author&quot;: {
                &quot;data&quot;: {
                    &quot;id&quot;: 0
                }
            }
        }
    }
};

fetch(url, {
    method: &quot;POST&quot;,
    headers,
    body: JSON.stringify(body),
}).then(response =&amp;gt; response.json());&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;

&lt;/span&gt;

&lt;span id=&quot;example-responses-POSTapi-v1-tickets&quot;&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-results-POSTapi-v1-tickets&quot; hidden&gt;
    &lt;blockquote&gt;Received response&lt;span
                id=&quot;execution-response-status-POSTapi-v1-tickets&quot;&gt;&lt;/span&gt;:
    &lt;/blockquote&gt;
    &lt;pre class=&quot;json&quot;&gt;&lt;code id=&quot;execution-response-content-POSTapi-v1-tickets&quot;
      data-empty-response-text=&quot;&lt;Empty response&gt;&quot; style=&quot;max-height: 400px;&quot;&gt;&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-error-POSTapi-v1-tickets&quot; hidden&gt;
    &lt;blockquote&gt;Request failed with error:&lt;/blockquote&gt;
    &lt;pre&gt;&lt;code id=&quot;execution-error-message-POSTapi-v1-tickets&quot;&gt;

Tip: Check that you&amp;#039;re properly connected to the network.
If you&amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;form id=&quot;form-POSTapi-v1-tickets&quot; data-method=&quot;POST&quot;
      data-path=&quot;api/v1/tickets&quot;
      data-authed=&quot;1&quot;
      data-hasfiles=&quot;0&quot;
      data-isarraybody=&quot;0&quot;
      autocomplete=&quot;off&quot;
      onsubmit=&quot;event.preventDefault(); executeTryOut(&#039;POSTapi-v1-tickets&#039;, this);&quot;&gt;
    &lt;h3&gt;
        Request&amp;nbsp;&amp;nbsp;&amp;nbsp;
                    &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-tryout-POSTapi-v1-tickets&quot;
                    onclick=&quot;tryItOut(&#039;POSTapi-v1-tickets&#039;);&quot;&gt;Try it out ⚡
            &lt;/button&gt;
            &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-canceltryout-POSTapi-v1-tickets&quot;
                    onclick=&quot;cancelTryOut(&#039;POSTapi-v1-tickets&#039;);&quot; hidden&gt;Cancel 🛑
            &lt;/button&gt;&amp;nbsp;&amp;nbsp;
            &lt;button type=&quot;submit&quot;
                    style=&quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-executetryout-POSTapi-v1-tickets&quot;
                    data-initial-text=&quot;Send Request 💥&quot;
                    data-loading-text=&quot;⏱ Sending...&quot;
                    hidden&gt;Send Request 💥
            &lt;/button&gt;
            &lt;/h3&gt;
            &lt;p&gt;
            &lt;small class=&quot;badge badge-black&quot;&gt;POST&lt;/small&gt;
            &lt;b&gt;&lt;code&gt;api/v1/tickets&lt;/code&gt;&lt;/b&gt;
        &lt;/p&gt;
                &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Headers&lt;/b&gt;&lt;/h4&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Authorization&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Authorization&quot; class=&quot;auth-value&quot;               data-endpoint=&quot;POSTapi-v1-tickets&quot;
               value=&quot;Bearer {YOUR_AUTH_KEY}&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;Bearer {YOUR_AUTH_KEY}&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Content-Type&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Content-Type&quot;                data-endpoint=&quot;POSTapi-v1-tickets&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Accept&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Accept&quot;                data-endpoint=&quot;POSTapi-v1-tickets&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Body Parameters&lt;/b&gt;&lt;/h4&gt;
        &lt;div style=&quot; padding-left: 28px;  clear: unset;&quot;&gt;
        &lt;details&gt;
            &lt;summary style=&quot;padding-bottom: 10px;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;data&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;object&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
&lt;br&gt;

            &lt;/summary&gt;
                                                &lt;div style=&quot; margin-left: 14px; clear: unset;&quot;&gt;
        &lt;details&gt;
            &lt;summary style=&quot;padding-bottom: 10px;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;attributes&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;object&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
&lt;br&gt;

            &lt;/summary&gt;
                                                &lt;div style=&quot;margin-left: 28px; clear: unset;&quot;&gt;
                        &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;title&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;string&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;data.attributes.title&quot;                data-endpoint=&quot;POSTapi-v1-tickets&quot;
               value=&quot;No example&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;
&lt;p&gt;The title of the ticket --. Example: &lt;code&gt;No example&lt;/code&gt;&lt;/p&gt;
                    &lt;/div&gt;
                                                                &lt;div style=&quot;margin-left: 28px; clear: unset;&quot;&gt;
                        &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;description&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;string&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;data.attributes.description&quot;                data-endpoint=&quot;POSTapi-v1-tickets&quot;
               value=&quot;Deserunt accusantium rerum ab minima asperiores assumenda placeat.&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;
&lt;p&gt;The description of the ticket. Example: &lt;code&gt;Deserunt accusantium rerum ab minima asperiores assumenda placeat.&lt;/code&gt;&lt;/p&gt;
                    &lt;/div&gt;
                                                                &lt;div style=&quot;margin-left: 28px; clear: unset;&quot;&gt;
                        &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;status&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;string&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;data.attributes.status&quot;                data-endpoint=&quot;POSTapi-v1-tickets&quot;
               value=&quot;C&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;
&lt;p&gt;The status of the ticket. Example: &lt;code&gt;C&lt;/code&gt;&lt;/p&gt;
Must be one of:
&lt;ul style=&quot;list-style-type: square;&quot;&gt;&lt;li&gt;&lt;code&gt;A&lt;/code&gt;&lt;/li&gt; &lt;li&gt;&lt;code&gt;C&lt;/code&gt;&lt;/li&gt; &lt;li&gt;&lt;code&gt;H&lt;/code&gt;&lt;/li&gt; &lt;li&gt;&lt;code&gt;X&lt;/code&gt;&lt;/li&gt;&lt;/ul&gt;
                    &lt;/div&gt;
                                    &lt;/details&gt;
        &lt;/div&gt;
                                                                    &lt;div style=&quot; margin-left: 14px; clear: unset;&quot;&gt;
        &lt;details&gt;
            &lt;summary style=&quot;padding-bottom: 10px;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;relationships&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;object&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
&lt;br&gt;

            &lt;/summary&gt;
                                                &lt;div style=&quot; margin-left: 28px; clear: unset;&quot;&gt;
        &lt;details&gt;
            &lt;summary style=&quot;padding-bottom: 10px;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;author&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;object&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
&lt;br&gt;

            &lt;/summary&gt;
                                                &lt;div style=&quot; margin-left: 42px; clear: unset;&quot;&gt;
        &lt;details&gt;
            &lt;summary style=&quot;padding-bottom: 10px;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;data&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;object&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
&lt;br&gt;

            &lt;/summary&gt;
                                                &lt;div style=&quot;margin-left: 56px; clear: unset;&quot;&gt;
                        &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;id&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;integer&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;number&quot; style=&quot;display: none&quot;
               step=&quot;any&quot;               name=&quot;data.relationships.author.data.id&quot;                data-endpoint=&quot;POSTapi-v1-tickets&quot;
               value=&quot;0&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;
&lt;p&gt;The id of the author of the ticket. Must be 13. Example: &lt;code&gt;0&lt;/code&gt;&lt;/p&gt;
                    &lt;/div&gt;
                                    &lt;/details&gt;
        &lt;/div&gt;
                                        &lt;/details&gt;
        &lt;/div&gt;
                                        &lt;/details&gt;
        &lt;/div&gt;
                                        &lt;/details&gt;
        &lt;/div&gt;
        &lt;/form&gt;

            

        
    &lt;/div&gt;
    &lt;div class=&quot;dark-box&quot;&gt;
                    &lt;div class=&quot;lang-selector&quot;&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;lang-button&quot; data-language-name=&quot;bash&quot;&gt;bash&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;lang-button&quot; data-language-name=&quot;javascript&quot;&gt;javascript&lt;/button&gt;
                            &lt;/div&gt;
            &lt;/div&gt;
&lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
</code>
 </pre>
    </span>
<span id="execution-results-GETapi-docs-v1" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-docs-v1"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-docs-v1"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-docs-v1" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-docs-v1">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-docs-v1" data-method="GET"
      data-path="api/docs/v1"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-docs-v1', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-docs-v1"
                    onclick="tryItOut('GETapi-docs-v1');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-docs-v1"
                    onclick="cancelTryOut('GETapi-docs-v1');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-docs-v1"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/docs/v1</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-docs-v1"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-docs-v1"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-docs-v1"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-v1-tickets--id-">Display the specified resource.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-tickets--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://tickets-api.test/api/v1/tickets/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://tickets-api.test/api/v1/tickets/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-tickets--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;type&quot;: &quot;ticket&quot;,
        &quot;id&quot;: 1,
        &quot;attributes&quot;: {
            &quot;title&quot;: &quot;dolor qui optio&quot;,
            &quot;description&quot;: &quot;Praesentium facere qui voluptatibus est. Saepe impedit ratione amet ut. Voluptas perferendis id earum fugit deleniti voluptatem. Debitis delectus molestias dolorem iusto dolores repellat consequuntur corrupti. Sit et accusantium omnis praesentium sit ratione.&quot;,
            &quot;status&quot;: &quot;X&quot;,
            &quot;created_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-05-15T22:40:44.000000Z&quot;
        },
        &quot;relationships&quot;: {
            &quot;author&quot;: {
                &quot;data&quot;: {
                    &quot;type&quot;: &quot;user&quot;,
                    &quot;id&quot;: 10
                },
                &quot;links&quot;: {
                    &quot;self&quot;: &quot;http://tickets-api.test/api/v1/authors/10&quot;
                }
            }
        },
        &quot;links&quot;: {
            &quot;self&quot;: &quot;http://tickets-api.test/api/v1/tickets/1&quot;
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-tickets--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-tickets--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-tickets--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-tickets--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-tickets--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-tickets--id-" data-method="GET"
      data-path="api/v1/tickets/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-tickets--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-tickets--id-"
                    onclick="tryItOut('GETapi-v1-tickets--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-tickets--id-"
                    onclick="cancelTryOut('GETapi-v1-tickets--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-tickets--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/tickets/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-tickets--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-tickets--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-tickets--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-v1-tickets--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the ticket. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-DELETEapi-v1-tickets--id-">Remove the specified resource from storage.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-v1-tickets--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://tickets-api.test/api/v1/tickets/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://tickets-api.test/api/v1/tickets/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-tickets--id-">
</span>
<span id="execution-results-DELETEapi-v1-tickets--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-tickets--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-tickets--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-tickets--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-tickets--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-tickets--id-" data-method="DELETE"
      data-path="api/v1/tickets/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-tickets--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-tickets--id-"
                    onclick="tryItOut('DELETEapi-v1-tickets--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-tickets--id-"
                    onclick="cancelTryOut('DELETEapi-v1-tickets--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-tickets--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/tickets/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="DELETEapi-v1-tickets--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-tickets--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-tickets--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-v1-tickets--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the ticket. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-v1-tickets--ticket_id-">PUT api/v1/tickets/{ticket_id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-v1-tickets--ticket_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://tickets-api.test/api/v1/tickets/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"data\": {
        \"attributes\": {
            \"title\": \"ut\",
            \"description\": \"Ut omnis non dolores sit est.\",
            \"status\": \"X\"
        },
        \"relationships\": {
            \"author\": {
                \"data\": {
                    \"id\": 10
                }
            }
        }
    }
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://tickets-api.test/api/v1/tickets/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "data": {
        "attributes": {
            "title": "ut",
            "description": "Ut omnis non dolores sit est.",
            "status": "X"
        },
        "relationships": {
            "author": {
                "data": {
                    "id": 10
                }
            }
        }
    }
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-tickets--ticket_id-">
</span>
<span id="execution-results-PUTapi-v1-tickets--ticket_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-tickets--ticket_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-tickets--ticket_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-tickets--ticket_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-tickets--ticket_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-tickets--ticket_id-" data-method="PUT"
      data-path="api/v1/tickets/{ticket_id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-tickets--ticket_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-tickets--ticket_id-"
                    onclick="tryItOut('PUTapi-v1-tickets--ticket_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-tickets--ticket_id-"
                    onclick="cancelTryOut('PUTapi-v1-tickets--ticket_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-tickets--ticket_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/tickets/{ticket_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="PUTapi-v1-tickets--ticket_id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-tickets--ticket_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-tickets--ticket_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>ticket_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="ticket_id"                data-endpoint="PUTapi-v1-tickets--ticket_id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the ticket. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>data</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>attributes</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.title"                data-endpoint="PUTapi-v1-tickets--ticket_id-"
               value="ut"
               data-component="body">
    <br>
<p>Example: <code>ut</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.description"                data-endpoint="PUTapi-v1-tickets--ticket_id-"
               value="Ut omnis non dolores sit est."
               data-component="body">
    <br>
<p>Example: <code>Ut omnis non dolores sit est.</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.status"                data-endpoint="PUTapi-v1-tickets--ticket_id-"
               value="X"
               data-component="body">
    <br>
<p>Example: <code>X</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>A</code></li> <li><code>C</code></li> <li><code>H</code></li> <li><code>X</code></li></ul>
                    </div>
                                    </details>
        </div>
                                                                    <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>relationships</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style=" margin-left: 28px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>author</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style=" margin-left: 42px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>data</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 56px; clear: unset;">
                        <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="data.relationships.author.data.id"                data-endpoint="PUTapi-v1-tickets--ticket_id-"
               value="10"
               data-component="body">
    <br>
<p>Example: <code>10</code></p>
                    </div>
                                    </details>
        </div>
                                        </details>
        </div>
                                        </details>
        </div>
                                        </details>
        </div>
        </form>

                    <h2 id="endpoints-PATCHapi-v1-tickets--ticket_id-">Update the specified resource in storage.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PATCHapi-v1-tickets--ticket_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://tickets-api.test/api/v1/tickets/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"data\": {
        \"attributes\": {
            \"title\": \"dolorum\",
            \"description\": \"Omnis quia iure accusantium nostrum occaecati dolorem et.\",
            \"status\": \"H\"
        },
        \"relationships\": {
            \"author\": {
                \"data\": []
            }
        }
    }
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://tickets-api.test/api/v1/tickets/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "data": {
        "attributes": {
            "title": "dolorum",
            "description": "Omnis quia iure accusantium nostrum occaecati dolorem et.",
            "status": "H"
        },
        "relationships": {
            "author": {
                "data": []
            }
        }
    }
};

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-v1-tickets--ticket_id-">
</span>
<span id="execution-results-PATCHapi-v1-tickets--ticket_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-v1-tickets--ticket_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-v1-tickets--ticket_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-v1-tickets--ticket_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-v1-tickets--ticket_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PATCHapi-v1-tickets--ticket_id-" data-method="PATCH"
      data-path="api/v1/tickets/{ticket_id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-v1-tickets--ticket_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-v1-tickets--ticket_id-"
                    onclick="tryItOut('PATCHapi-v1-tickets--ticket_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-v1-tickets--ticket_id-"
                    onclick="cancelTryOut('PATCHapi-v1-tickets--ticket_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-v1-tickets--ticket_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/tickets/{ticket_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="PATCHapi-v1-tickets--ticket_id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PATCHapi-v1-tickets--ticket_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PATCHapi-v1-tickets--ticket_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>ticket_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="ticket_id"                data-endpoint="PATCHapi-v1-tickets--ticket_id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the ticket. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>data</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>attributes</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.title"                data-endpoint="PATCHapi-v1-tickets--ticket_id-"
               value="dolorum"
               data-component="body">
    <br>
<p>Example: <code>dolorum</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.description"                data-endpoint="PATCHapi-v1-tickets--ticket_id-"
               value="Omnis quia iure accusantium nostrum occaecati dolorem et."
               data-component="body">
    <br>
<p>Example: <code>Omnis quia iure accusantium nostrum occaecati dolorem et.</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.status"                data-endpoint="PATCHapi-v1-tickets--ticket_id-"
               value="H"
               data-component="body">
    <br>
<p>Example: <code>H</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>A</code></li> <li><code>C</code></li> <li><code>H</code></li> <li><code>X</code></li></ul>
                    </div>
                                    </details>
        </div>
                                                                    <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>relationships</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style=" margin-left: 28px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>author</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style=" margin-left: 42px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>data</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 56px; clear: unset;">
                        <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="data.relationships.author.data.id"                data-endpoint="PATCHapi-v1-tickets--ticket_id-"
               value=""
               data-component="body">
    <br>

                    </div>
                                    </details>
        </div>
                                        </details>
        </div>
                                        </details>
        </div>
                                        </details>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-v1-users">Display a listing of the resource.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-users">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://tickets-api.test/api/v1/users" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://tickets-api.test/api/v1/users"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-users">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;type&quot;: &quot;user&quot;,
            &quot;id&quot;: 1,
            &quot;attributes&quot;: {
                &quot;name&quot;: &quot;Jayce Effertz&quot;,
                &quot;email&quot;: &quot;elijah.miller@example.com&quot;,
                &quot;isManager&quot;: false
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-api.test/api/v1/authors/1&quot;
            }
        },
        {
            &quot;type&quot;: &quot;user&quot;,
            &quot;id&quot;: 2,
            &quot;attributes&quot;: {
                &quot;name&quot;: &quot;Philip Schmeler&quot;,
                &quot;email&quot;: &quot;thiel.mireille@example.com&quot;,
                &quot;isManager&quot;: false
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-api.test/api/v1/authors/2&quot;
            }
        },
        {
            &quot;type&quot;: &quot;user&quot;,
            &quot;id&quot;: 3,
            &quot;attributes&quot;: {
                &quot;name&quot;: &quot;Mr. Malcolm Lubowitz&quot;,
                &quot;email&quot;: &quot;eichmann.arlene@example.com&quot;,
                &quot;isManager&quot;: false
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-api.test/api/v1/authors/3&quot;
            }
        },
        {
            &quot;type&quot;: &quot;user&quot;,
            &quot;id&quot;: 4,
            &quot;attributes&quot;: {
                &quot;name&quot;: &quot;Mr. Austin Heller Jr.&quot;,
                &quot;email&quot;: &quot;botsford.eileen@example.org&quot;,
                &quot;isManager&quot;: false
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-api.test/api/v1/authors/4&quot;
            }
        },
        {
            &quot;type&quot;: &quot;user&quot;,
            &quot;id&quot;: 5,
            &quot;attributes&quot;: {
                &quot;name&quot;: &quot;Dr. Kristina Spencer DDS&quot;,
                &quot;email&quot;: &quot;drunolfsdottir@example.org&quot;,
                &quot;isManager&quot;: false
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-api.test/api/v1/authors/5&quot;
            }
        },
        {
            &quot;type&quot;: &quot;user&quot;,
            &quot;id&quot;: 6,
            &quot;attributes&quot;: {
                &quot;name&quot;: &quot;Dr. Diamond Sporer&quot;,
                &quot;email&quot;: &quot;madyson.brakus@example.com&quot;,
                &quot;isManager&quot;: false
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-api.test/api/v1/authors/6&quot;
            }
        },
        {
            &quot;type&quot;: &quot;user&quot;,
            &quot;id&quot;: 7,
            &quot;attributes&quot;: {
                &quot;name&quot;: &quot;Kathlyn Smith&quot;,
                &quot;email&quot;: &quot;kschaden@example.com&quot;,
                &quot;isManager&quot;: false
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-api.test/api/v1/authors/7&quot;
            }
        },
        {
            &quot;type&quot;: &quot;user&quot;,
            &quot;id&quot;: 8,
            &quot;attributes&quot;: {
                &quot;name&quot;: &quot;Irving Rowe&quot;,
                &quot;email&quot;: &quot;aheidenreich@example.net&quot;,
                &quot;isManager&quot;: false
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-api.test/api/v1/authors/8&quot;
            }
        },
        {
            &quot;type&quot;: &quot;user&quot;,
            &quot;id&quot;: 9,
            &quot;attributes&quot;: {
                &quot;name&quot;: &quot;Creola Lubowitz&quot;,
                &quot;email&quot;: &quot;runolfsdottir.rosina@example.org&quot;,
                &quot;isManager&quot;: false
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-api.test/api/v1/authors/9&quot;
            }
        },
        {
            &quot;type&quot;: &quot;user&quot;,
            &quot;id&quot;: 10,
            &quot;attributes&quot;: {
                &quot;name&quot;: &quot;Alejandra Ebert&quot;,
                &quot;email&quot;: &quot;bwillms@example.com&quot;,
                &quot;isManager&quot;: false
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-api.test/api/v1/authors/10&quot;
            }
        },
        {
            &quot;type&quot;: &quot;user&quot;,
            &quot;id&quot;: 13,
            &quot;attributes&quot;: {
                &quot;name&quot;: &quot;Manager&quot;,
                &quot;email&quot;: &quot;manager@manager.com&quot;,
                &quot;isManager&quot;: true
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-api.test/api/v1/authors/13&quot;
            }
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://tickets-api.test/api/v1/users?page=1&quot;,
        &quot;last&quot;: &quot;http://tickets-api.test/api/v1/users?page=1&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: null
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 1,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://tickets-api.test/api/v1/users?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;http://tickets-api.test/api/v1/users&quot;,
        &quot;per_page&quot;: 15,
        &quot;to&quot;: 11,
        &quot;total&quot;: 11
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-users" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-users"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-users"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-users">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-users" data-method="GET"
      data-path="api/v1/users"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-users', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-users"
                    onclick="tryItOut('GETapi-v1-users');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-users"
                    onclick="cancelTryOut('GETapi-v1-users');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-users"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/users</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-users"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-users"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-users"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-v1-users">Store a newly created resource in storage.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-users">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://tickets-api.test/api/v1/users" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"data\": {
        \"attributes\": {
            \"name\": \"totam\",
            \"email\": \"ehauck@example.org\",
            \"isManager\": true,
            \"password\": \"3)Qv83R[0&lt;,8,\"
        }
    }
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://tickets-api.test/api/v1/users"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "data": {
        "attributes": {
            "name": "totam",
            "email": "ehauck@example.org",
            "isManager": true,
            "password": "3)Qv83R[0&lt;,8,"
        }
    }
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-users">
</span>
<span id="execution-results-POSTapi-v1-users" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-users"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-users"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-users">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-users" data-method="POST"
      data-path="api/v1/users"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-users', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-users"
                    onclick="tryItOut('POSTapi-v1-users');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-users"
                    onclick="cancelTryOut('POSTapi-v1-users');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-users"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/users</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-users"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-users"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-users"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>data</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>attributes</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.name"                data-endpoint="POSTapi-v1-users"
               value="totam"
               data-component="body">
    <br>
<p>Example: <code>totam</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.email"                data-endpoint="POSTapi-v1-users"
               value="ehauck@example.org"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>ehauck@example.org</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>isManager</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
 &nbsp;
                <label data-endpoint="POSTapi-v1-users" style="display: none">
            <input type="radio" name="data.attributes.isManager"
                   value="true"
                   data-endpoint="POSTapi-v1-users"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-v1-users" style="display: none">
            <input type="radio" name="data.attributes.isManager"
                   value="false"
                   data-endpoint="POSTapi-v1-users"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.password"                data-endpoint="POSTapi-v1-users"
               value="3)Qv83R[0<,8,"
               data-component="body">
    <br>
<p>Example: <code>3)Qv83R[0&lt;,8,</code></p>
                    </div>
                                    </details>
        </div>
                                        </details>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-v1-users--id-">Display the specified resource.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-users--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://tickets-api.test/api/v1/users/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://tickets-api.test/api/v1/users/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-users--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;type&quot;: &quot;user&quot;,
        &quot;id&quot;: 1,
        &quot;attributes&quot;: {
            &quot;name&quot;: &quot;Jayce Effertz&quot;,
            &quot;email&quot;: &quot;elijah.miller@example.com&quot;,
            &quot;isManager&quot;: false
        },
        &quot;links&quot;: {
            &quot;self&quot;: &quot;http://tickets-api.test/api/v1/authors/1&quot;
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-users--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-users--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-users--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-users--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-users--id-" data-method="GET"
      data-path="api/v1/users/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-users--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-users--id-"
                    onclick="tryItOut('GETapi-v1-users--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-users--id-"
                    onclick="cancelTryOut('GETapi-v1-users--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-users--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/users/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-users--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-users--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-users--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-v1-users--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the user. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-DELETEapi-v1-users--id-">Remove the specified resource from storage.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-v1-users--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://tickets-api.test/api/v1/users/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://tickets-api.test/api/v1/users/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-users--id-">
</span>
<span id="execution-results-DELETEapi-v1-users--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-users--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-users--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-users--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-users--id-" data-method="DELETE"
      data-path="api/v1/users/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-users--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-users--id-"
                    onclick="tryItOut('DELETEapi-v1-users--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-users--id-"
                    onclick="cancelTryOut('DELETEapi-v1-users--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-users--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/users/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="DELETEapi-v1-users--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-users--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-users--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-v1-users--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the user. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-v1-users--user_id-">PUT api/v1/users/{user_id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-v1-users--user_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://tickets-api.test/api/v1/users/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"data\": {
        \"attributes\": {
            \"name\": \"exercitationem\",
            \"email\": \"pfeil@example.org\",
            \"isManager\": true,
            \"password\": \"r6|!P7qy?Rm\"
        }
    }
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://tickets-api.test/api/v1/users/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "data": {
        "attributes": {
            "name": "exercitationem",
            "email": "pfeil@example.org",
            "isManager": true,
            "password": "r6|!P7qy?Rm"
        }
    }
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-users--user_id-">
</span>
<span id="execution-results-PUTapi-v1-users--user_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-users--user_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-users--user_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-users--user_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-users--user_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-users--user_id-" data-method="PUT"
      data-path="api/v1/users/{user_id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-users--user_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-users--user_id-"
                    onclick="tryItOut('PUTapi-v1-users--user_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-users--user_id-"
                    onclick="cancelTryOut('PUTapi-v1-users--user_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-users--user_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/users/{user_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="PUTapi-v1-users--user_id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-users--user_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-users--user_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>user_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="user_id"                data-endpoint="PUTapi-v1-users--user_id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the user. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>data</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>attributes</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.name"                data-endpoint="PUTapi-v1-users--user_id-"
               value="exercitationem"
               data-component="body">
    <br>
<p>Example: <code>exercitationem</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.email"                data-endpoint="PUTapi-v1-users--user_id-"
               value="pfeil@example.org"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>pfeil@example.org</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>isManager</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
 &nbsp;
                <label data-endpoint="PUTapi-v1-users--user_id-" style="display: none">
            <input type="radio" name="data.attributes.isManager"
                   value="true"
                   data-endpoint="PUTapi-v1-users--user_id-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-v1-users--user_id-" style="display: none">
            <input type="radio" name="data.attributes.isManager"
                   value="false"
                   data-endpoint="PUTapi-v1-users--user_id-"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.password"                data-endpoint="PUTapi-v1-users--user_id-"
               value="r6|!P7qy?Rm"
               data-component="body">
    <br>
<p>Example: <code>r6|!P7qy?Rm</code></p>
                    </div>
                                    </details>
        </div>
                                        </details>
        </div>
        </form>

                    <h2 id="endpoints-PATCHapi-v1-users--user_id-">Update the specified resource in storage.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PATCHapi-v1-users--user_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://tickets-api.test/api/v1/users/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"data\": {
        \"attributes\": {
            \"name\": \"magni\",
            \"email\": \"toy.deon@example.net\",
            \"isManager\": false,
            \"password\": \"D9pI?1L\'D0Y\"
        }
    }
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://tickets-api.test/api/v1/users/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "data": {
        "attributes": {
            "name": "magni",
            "email": "toy.deon@example.net",
            "isManager": false,
            "password": "D9pI?1L'D0Y"
        }
    }
};

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-v1-users--user_id-">
</span>
<span id="execution-results-PATCHapi-v1-users--user_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-v1-users--user_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-v1-users--user_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-v1-users--user_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-v1-users--user_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PATCHapi-v1-users--user_id-" data-method="PATCH"
      data-path="api/v1/users/{user_id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-v1-users--user_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-v1-users--user_id-"
                    onclick="tryItOut('PATCHapi-v1-users--user_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-v1-users--user_id-"
                    onclick="cancelTryOut('PATCHapi-v1-users--user_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-v1-users--user_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/users/{user_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="PATCHapi-v1-users--user_id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PATCHapi-v1-users--user_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PATCHapi-v1-users--user_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>user_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="user_id"                data-endpoint="PATCHapi-v1-users--user_id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the user. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>data</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>attributes</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.name"                data-endpoint="PATCHapi-v1-users--user_id-"
               value="magni"
               data-component="body">
    <br>
<p>Example: <code>magni</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.email"                data-endpoint="PATCHapi-v1-users--user_id-"
               value="toy.deon@example.net"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>toy.deon@example.net</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>isManager</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="PATCHapi-v1-users--user_id-" style="display: none">
            <input type="radio" name="data.attributes.isManager"
                   value="true"
                   data-endpoint="PATCHapi-v1-users--user_id-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PATCHapi-v1-users--user_id-" style="display: none">
            <input type="radio" name="data.attributes.isManager"
                   value="false"
                   data-endpoint="PATCHapi-v1-users--user_id-"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.password"                data-endpoint="PATCHapi-v1-users--user_id-"
               value="D9pI?1L'D0Y"
               data-component="body">
    <br>
<p>Example: <code>D9pI?1L'D0Y</code></p>
                    </div>
                                    </details>
        </div>
                                        </details>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-v1-authors">Display a listing of the resource.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-authors">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://tickets-api.test/api/v1/authors" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://tickets-api.test/api/v1/authors"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-authors">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;type&quot;: &quot;user&quot;,
            &quot;id&quot;: 1,
            &quot;attributes&quot;: {
                &quot;name&quot;: &quot;Jayce Effertz&quot;,
                &quot;email&quot;: &quot;elijah.miller@example.com&quot;,
                &quot;isManager&quot;: false,
                &quot;email_verified_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;,
                &quot;created_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-api.test/api/v1/authors/1&quot;
            }
        },
        {
            &quot;type&quot;: &quot;user&quot;,
            &quot;id&quot;: 2,
            &quot;attributes&quot;: {
                &quot;name&quot;: &quot;Philip Schmeler&quot;,
                &quot;email&quot;: &quot;thiel.mireille@example.com&quot;,
                &quot;isManager&quot;: false,
                &quot;email_verified_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;,
                &quot;created_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-api.test/api/v1/authors/2&quot;
            }
        },
        {
            &quot;type&quot;: &quot;user&quot;,
            &quot;id&quot;: 3,
            &quot;attributes&quot;: {
                &quot;name&quot;: &quot;Mr. Malcolm Lubowitz&quot;,
                &quot;email&quot;: &quot;eichmann.arlene@example.com&quot;,
                &quot;isManager&quot;: false,
                &quot;email_verified_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;,
                &quot;created_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-api.test/api/v1/authors/3&quot;
            }
        },
        {
            &quot;type&quot;: &quot;user&quot;,
            &quot;id&quot;: 4,
            &quot;attributes&quot;: {
                &quot;name&quot;: &quot;Mr. Austin Heller Jr.&quot;,
                &quot;email&quot;: &quot;botsford.eileen@example.org&quot;,
                &quot;isManager&quot;: false,
                &quot;email_verified_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;,
                &quot;created_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-api.test/api/v1/authors/4&quot;
            }
        },
        {
            &quot;type&quot;: &quot;user&quot;,
            &quot;id&quot;: 5,
            &quot;attributes&quot;: {
                &quot;name&quot;: &quot;Dr. Kristina Spencer DDS&quot;,
                &quot;email&quot;: &quot;drunolfsdottir@example.org&quot;,
                &quot;isManager&quot;: false,
                &quot;email_verified_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;,
                &quot;created_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-api.test/api/v1/authors/5&quot;
            }
        },
        {
            &quot;type&quot;: &quot;user&quot;,
            &quot;id&quot;: 6,
            &quot;attributes&quot;: {
                &quot;name&quot;: &quot;Dr. Diamond Sporer&quot;,
                &quot;email&quot;: &quot;madyson.brakus@example.com&quot;,
                &quot;isManager&quot;: false,
                &quot;email_verified_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;,
                &quot;created_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-api.test/api/v1/authors/6&quot;
            }
        },
        {
            &quot;type&quot;: &quot;user&quot;,
            &quot;id&quot;: 7,
            &quot;attributes&quot;: {
                &quot;name&quot;: &quot;Kathlyn Smith&quot;,
                &quot;email&quot;: &quot;kschaden@example.com&quot;,
                &quot;isManager&quot;: false,
                &quot;email_verified_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;,
                &quot;created_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-api.test/api/v1/authors/7&quot;
            }
        },
        {
            &quot;type&quot;: &quot;user&quot;,
            &quot;id&quot;: 8,
            &quot;attributes&quot;: {
                &quot;name&quot;: &quot;Irving Rowe&quot;,
                &quot;email&quot;: &quot;aheidenreich@example.net&quot;,
                &quot;isManager&quot;: false,
                &quot;email_verified_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;,
                &quot;created_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-api.test/api/v1/authors/8&quot;
            }
        },
        {
            &quot;type&quot;: &quot;user&quot;,
            &quot;id&quot;: 9,
            &quot;attributes&quot;: {
                &quot;name&quot;: &quot;Creola Lubowitz&quot;,
                &quot;email&quot;: &quot;runolfsdottir.rosina@example.org&quot;,
                &quot;isManager&quot;: false,
                &quot;email_verified_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;,
                &quot;created_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-api.test/api/v1/authors/9&quot;
            }
        },
        {
            &quot;type&quot;: &quot;user&quot;,
            &quot;id&quot;: 10,
            &quot;attributes&quot;: {
                &quot;name&quot;: &quot;Alejandra Ebert&quot;,
                &quot;email&quot;: &quot;bwillms@example.com&quot;,
                &quot;isManager&quot;: false,
                &quot;email_verified_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;,
                &quot;created_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-api.test/api/v1/authors/10&quot;
            }
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://tickets-api.test/api/v1/authors?page=1&quot;,
        &quot;last&quot;: &quot;http://tickets-api.test/api/v1/authors?page=7&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: &quot;http://tickets-api.test/api/v1/authors?page=2&quot;
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 7,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://tickets-api.test/api/v1/authors?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: &quot;http://tickets-api.test/api/v1/authors?page=2&quot;,
                &quot;label&quot;: &quot;2&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://tickets-api.test/api/v1/authors?page=3&quot;,
                &quot;label&quot;: &quot;3&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://tickets-api.test/api/v1/authors?page=4&quot;,
                &quot;label&quot;: &quot;4&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://tickets-api.test/api/v1/authors?page=5&quot;,
                &quot;label&quot;: &quot;5&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://tickets-api.test/api/v1/authors?page=6&quot;,
                &quot;label&quot;: &quot;6&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://tickets-api.test/api/v1/authors?page=7&quot;,
                &quot;label&quot;: &quot;7&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://tickets-api.test/api/v1/authors?page=2&quot;,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;http://tickets-api.test/api/v1/authors&quot;,
        &quot;per_page&quot;: 15,
        &quot;to&quot;: 10,
        &quot;total&quot;: 101
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-authors" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-authors"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-authors"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-authors" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-authors">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-authors" data-method="GET"
      data-path="api/v1/authors"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-authors', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-authors"
                    onclick="tryItOut('GETapi-v1-authors');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-authors"
                    onclick="cancelTryOut('GETapi-v1-authors');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-authors"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/authors</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-authors"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-authors"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-authors"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-v1-authors--id-">Display the specified resource.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-authors--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://tickets-api.test/api/v1/authors/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://tickets-api.test/api/v1/authors/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-authors--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;type&quot;: &quot;user&quot;,
        &quot;id&quot;: 1,
        &quot;attributes&quot;: {
            &quot;name&quot;: &quot;Jayce Effertz&quot;,
            &quot;email&quot;: &quot;elijah.miller@example.com&quot;,
            &quot;isManager&quot;: false,
            &quot;email_verified_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;,
            &quot;created_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;
        },
        &quot;links&quot;: {
            &quot;self&quot;: &quot;http://tickets-api.test/api/v1/authors/1&quot;
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-authors--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-authors--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-authors--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-authors--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-authors--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-authors--id-" data-method="GET"
      data-path="api/v1/authors/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-authors--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-authors--id-"
                    onclick="tryItOut('GETapi-v1-authors--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-authors--id-"
                    onclick="cancelTryOut('GETapi-v1-authors--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-authors--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/authors/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-authors--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-authors--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-authors--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-v1-authors--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the author. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-DELETEapi-v1-authors--id-">Remove the specified resource from storage.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-v1-authors--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://tickets-api.test/api/v1/authors/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://tickets-api.test/api/v1/authors/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-authors--id-">
</span>
<span id="execution-results-DELETEapi-v1-authors--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-authors--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-authors--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-authors--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-authors--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-authors--id-" data-method="DELETE"
      data-path="api/v1/authors/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-authors--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-authors--id-"
                    onclick="tryItOut('DELETEapi-v1-authors--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-authors--id-"
                    onclick="cancelTryOut('DELETEapi-v1-authors--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-authors--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/authors/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="DELETEapi-v1-authors--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-authors--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-authors--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-v1-authors--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the author. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-v1-authors--author_id--tickets">GET api/v1/authors/{author_id}/tickets</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-authors--author_id--tickets">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://tickets-api.test/api/v1/authors/1/tickets" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://tickets-api.test/api/v1/authors/1/tickets"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-authors--author_id--tickets">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;type&quot;: &quot;ticket&quot;,
            &quot;id&quot;: 30,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;Changed title 29 may&quot;,
                &quot;status&quot;: &quot;C&quot;,
                &quot;created_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2024-05-29T22:51:29.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;author&quot;: {
                    &quot;data&quot;: {
                        &quot;type&quot;: &quot;user&quot;,
                        &quot;id&quot;: 1
                    },
                    &quot;links&quot;: {
                        &quot;self&quot;: &quot;http://tickets-api.test/api/v1/authors/1&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-api.test/api/v1/tickets/30&quot;
            }
        },
        {
            &quot;type&quot;: &quot;ticket&quot;,
            &quot;id&quot;: 35,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;doloremque ipsa officiis&quot;,
                &quot;status&quot;: &quot;X&quot;,
                &quot;created_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;author&quot;: {
                    &quot;data&quot;: {
                        &quot;type&quot;: &quot;user&quot;,
                        &quot;id&quot;: 1
                    },
                    &quot;links&quot;: {
                        &quot;self&quot;: &quot;http://tickets-api.test/api/v1/authors/1&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-api.test/api/v1/tickets/35&quot;
            }
        },
        {
            &quot;type&quot;: &quot;ticket&quot;,
            &quot;id&quot;: 44,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;saepe possimus id&quot;,
                &quot;status&quot;: &quot;H&quot;,
                &quot;created_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;author&quot;: {
                    &quot;data&quot;: {
                        &quot;type&quot;: &quot;user&quot;,
                        &quot;id&quot;: 1
                    },
                    &quot;links&quot;: {
                        &quot;self&quot;: &quot;http://tickets-api.test/api/v1/authors/1&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-api.test/api/v1/tickets/44&quot;
            }
        },
        {
            &quot;type&quot;: &quot;ticket&quot;,
            &quot;id&quot;: 46,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;dolores occaecati officia&quot;,
                &quot;status&quot;: &quot;A&quot;,
                &quot;created_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;author&quot;: {
                    &quot;data&quot;: {
                        &quot;type&quot;: &quot;user&quot;,
                        &quot;id&quot;: 1
                    },
                    &quot;links&quot;: {
                        &quot;self&quot;: &quot;http://tickets-api.test/api/v1/authors/1&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-api.test/api/v1/tickets/46&quot;
            }
        },
        {
            &quot;type&quot;: &quot;ticket&quot;,
            &quot;id&quot;: 48,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;neque error quia&quot;,
                &quot;status&quot;: &quot;A&quot;,
                &quot;created_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;author&quot;: {
                    &quot;data&quot;: {
                        &quot;type&quot;: &quot;user&quot;,
                        &quot;id&quot;: 1
                    },
                    &quot;links&quot;: {
                        &quot;self&quot;: &quot;http://tickets-api.test/api/v1/authors/1&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-api.test/api/v1/tickets/48&quot;
            }
        },
        {
            &quot;type&quot;: &quot;ticket&quot;,
            &quot;id&quot;: 49,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;totam illum nihil&quot;,
                &quot;status&quot;: &quot;H&quot;,
                &quot;created_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;author&quot;: {
                    &quot;data&quot;: {
                        &quot;type&quot;: &quot;user&quot;,
                        &quot;id&quot;: 1
                    },
                    &quot;links&quot;: {
                        &quot;self&quot;: &quot;http://tickets-api.test/api/v1/authors/1&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-api.test/api/v1/tickets/49&quot;
            }
        },
        {
            &quot;type&quot;: &quot;ticket&quot;,
            &quot;id&quot;: 50,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;perferendis placeat quia&quot;,
                &quot;status&quot;: &quot;X&quot;,
                &quot;created_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;author&quot;: {
                    &quot;data&quot;: {
                        &quot;type&quot;: &quot;user&quot;,
                        &quot;id&quot;: 1
                    },
                    &quot;links&quot;: {
                        &quot;self&quot;: &quot;http://tickets-api.test/api/v1/authors/1&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-api.test/api/v1/tickets/50&quot;
            }
        },
        {
            &quot;type&quot;: &quot;ticket&quot;,
            &quot;id&quot;: 52,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;ea earum est&quot;,
                &quot;status&quot;: &quot;X&quot;,
                &quot;created_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;author&quot;: {
                    &quot;data&quot;: {
                        &quot;type&quot;: &quot;user&quot;,
                        &quot;id&quot;: 1
                    },
                    &quot;links&quot;: {
                        &quot;self&quot;: &quot;http://tickets-api.test/api/v1/authors/1&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-api.test/api/v1/tickets/52&quot;
            }
        },
        {
            &quot;type&quot;: &quot;ticket&quot;,
            &quot;id&quot;: 53,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;blanditiis similique at&quot;,
                &quot;status&quot;: &quot;A&quot;,
                &quot;created_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;author&quot;: {
                    &quot;data&quot;: {
                        &quot;type&quot;: &quot;user&quot;,
                        &quot;id&quot;: 1
                    },
                    &quot;links&quot;: {
                        &quot;self&quot;: &quot;http://tickets-api.test/api/v1/authors/1&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-api.test/api/v1/tickets/53&quot;
            }
        },
        {
            &quot;type&quot;: &quot;ticket&quot;,
            &quot;id&quot;: 62,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;non quod qui&quot;,
                &quot;status&quot;: &quot;X&quot;,
                &quot;created_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;author&quot;: {
                    &quot;data&quot;: {
                        &quot;type&quot;: &quot;user&quot;,
                        &quot;id&quot;: 1
                    },
                    &quot;links&quot;: {
                        &quot;self&quot;: &quot;http://tickets-api.test/api/v1/authors/1&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-api.test/api/v1/tickets/62&quot;
            }
        },
        {
            &quot;type&quot;: &quot;ticket&quot;,
            &quot;id&quot;: 73,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;dolorem deserunt facilis&quot;,
                &quot;status&quot;: &quot;C&quot;,
                &quot;created_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;author&quot;: {
                    &quot;data&quot;: {
                        &quot;type&quot;: &quot;user&quot;,
                        &quot;id&quot;: 1
                    },
                    &quot;links&quot;: {
                        &quot;self&quot;: &quot;http://tickets-api.test/api/v1/authors/1&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-api.test/api/v1/tickets/73&quot;
            }
        },
        {
            &quot;type&quot;: &quot;ticket&quot;,
            &quot;id&quot;: 81,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;nihil non provident&quot;,
                &quot;status&quot;: &quot;A&quot;,
                &quot;created_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;author&quot;: {
                    &quot;data&quot;: {
                        &quot;type&quot;: &quot;user&quot;,
                        &quot;id&quot;: 1
                    },
                    &quot;links&quot;: {
                        &quot;self&quot;: &quot;http://tickets-api.test/api/v1/authors/1&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-api.test/api/v1/tickets/81&quot;
            }
        },
        {
            &quot;type&quot;: &quot;ticket&quot;,
            &quot;id&quot;: 89,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;odio dolores laborum&quot;,
                &quot;status&quot;: &quot;H&quot;,
                &quot;created_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;author&quot;: {
                    &quot;data&quot;: {
                        &quot;type&quot;: &quot;user&quot;,
                        &quot;id&quot;: 1
                    },
                    &quot;links&quot;: {
                        &quot;self&quot;: &quot;http://tickets-api.test/api/v1/authors/1&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-api.test/api/v1/tickets/89&quot;
            }
        },
        {
            &quot;type&quot;: &quot;ticket&quot;,
            &quot;id&quot;: 92,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;aliquid ullam minima&quot;,
                &quot;status&quot;: &quot;A&quot;,
                &quot;created_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;author&quot;: {
                    &quot;data&quot;: {
                        &quot;type&quot;: &quot;user&quot;,
                        &quot;id&quot;: 1
                    },
                    &quot;links&quot;: {
                        &quot;self&quot;: &quot;http://tickets-api.test/api/v1/authors/1&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-api.test/api/v1/tickets/92&quot;
            }
        },
        {
            &quot;type&quot;: &quot;ticket&quot;,
            &quot;id&quot;: 97,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;distinctio omnis qui&quot;,
                &quot;status&quot;: &quot;H&quot;,
                &quot;created_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;author&quot;: {
                    &quot;data&quot;: {
                        &quot;type&quot;: &quot;user&quot;,
                        &quot;id&quot;: 1
                    },
                    &quot;links&quot;: {
                        &quot;self&quot;: &quot;http://tickets-api.test/api/v1/authors/1&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-api.test/api/v1/tickets/97&quot;
            }
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://tickets-api.test/api/v1/authors/1/tickets?page=1&quot;,
        &quot;last&quot;: &quot;http://tickets-api.test/api/v1/authors/1/tickets?page=2&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: &quot;http://tickets-api.test/api/v1/authors/1/tickets?page=2&quot;
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 2,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://tickets-api.test/api/v1/authors/1/tickets?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: &quot;http://tickets-api.test/api/v1/authors/1/tickets?page=2&quot;,
                &quot;label&quot;: &quot;2&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://tickets-api.test/api/v1/authors/1/tickets?page=2&quot;,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;http://tickets-api.test/api/v1/authors/1/tickets&quot;,
        &quot;per_page&quot;: 15,
        &quot;to&quot;: 15,
        &quot;total&quot;: 17
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-authors--author_id--tickets" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-authors--author_id--tickets"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-authors--author_id--tickets"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-authors--author_id--tickets" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-authors--author_id--tickets">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-authors--author_id--tickets" data-method="GET"
      data-path="api/v1/authors/{author_id}/tickets"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-authors--author_id--tickets', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-authors--author_id--tickets"
                    onclick="tryItOut('GETapi-v1-authors--author_id--tickets');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-authors--author_id--tickets"
                    onclick="cancelTryOut('GETapi-v1-authors--author_id--tickets');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-authors--author_id--tickets"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/authors/{author_id}/tickets</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-authors--author_id--tickets"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-authors--author_id--tickets"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-authors--author_id--tickets"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>author_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="author_id"                data-endpoint="GETapi-v1-authors--author_id--tickets"
               value="1"
               data-component="url">
    <br>
<p>The ID of the author. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-v1-authors--author_id--tickets">Store a newly created resource in storage.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-authors--author_id--tickets">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://tickets-api.test/api/v1/authors/1/tickets" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"data\": {
        \"attributes\": {
            \"title\": \"No example\",
            \"description\": \"Nam ut illo et ipsam nihil odio.\",
            \"status\": \"X\"
        }
    },
    \"author\": 0
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://tickets-api.test/api/v1/authors/1/tickets"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "data": {
        "attributes": {
            "title": "No example",
            "description": "Nam ut illo et ipsam nihil odio.",
            "status": "X"
        }
    },
    "author": 0
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-authors--author_id--tickets">
</span>
<span id="execution-results-POSTapi-v1-authors--author_id--tickets" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-authors--author_id--tickets"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-authors--author_id--tickets"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-authors--author_id--tickets" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-authors--author_id--tickets">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-authors--author_id--tickets" data-method="POST"
      data-path="api/v1/authors/{author_id}/tickets"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-authors--author_id--tickets', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-authors--author_id--tickets"
                    onclick="tryItOut('POSTapi-v1-authors--author_id--tickets');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-authors--author_id--tickets"
                    onclick="cancelTryOut('POSTapi-v1-authors--author_id--tickets');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-authors--author_id--tickets"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/authors/{author_id}/tickets</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-authors--author_id--tickets"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-authors--author_id--tickets"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-authors--author_id--tickets"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>author_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="author_id"                data-endpoint="POSTapi-v1-authors--author_id--tickets"
               value="1"
               data-component="url">
    <br>
<p>The ID of the author. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>data</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>attributes</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.title"                data-endpoint="POSTapi-v1-authors--author_id--tickets"
               value="No example"
               data-component="body">
    <br>
<p>The title of the ticket --. Example: <code>No example</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.description"                data-endpoint="POSTapi-v1-authors--author_id--tickets"
               value="Nam ut illo et ipsam nihil odio."
               data-component="body">
    <br>
<p>The description of the ticket. Example: <code>Nam ut illo et ipsam nihil odio.</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.status"                data-endpoint="POSTapi-v1-authors--author_id--tickets"
               value="X"
               data-component="body">
    <br>
<p>The status of the ticket. Example: <code>X</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>A</code></li> <li><code>C</code></li> <li><code>H</code></li> <li><code>X</code></li></ul>
                    </div>
                                    </details>
        </div>
                                        </details>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>author</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="author"                data-endpoint="POSTapi-v1-authors--author_id--tickets"
               value="0"
               data-component="body">
    <br>
<p>The id of the author of the ticket. Must be 13. Example: <code>0</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-v1-authors--author_id--tickets--id-">DELETE api/v1/authors/{author_id}/tickets/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-v1-authors--author_id--tickets--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://tickets-api.test/api/v1/authors/1/tickets/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://tickets-api.test/api/v1/authors/1/tickets/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-authors--author_id--tickets--id-">
</span>
<span id="execution-results-DELETEapi-v1-authors--author_id--tickets--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-authors--author_id--tickets--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-authors--author_id--tickets--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-authors--author_id--tickets--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-authors--author_id--tickets--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-authors--author_id--tickets--id-" data-method="DELETE"
      data-path="api/v1/authors/{author_id}/tickets/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-authors--author_id--tickets--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-authors--author_id--tickets--id-"
                    onclick="tryItOut('DELETEapi-v1-authors--author_id--tickets--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-authors--author_id--tickets--id-"
                    onclick="cancelTryOut('DELETEapi-v1-authors--author_id--tickets--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-authors--author_id--tickets--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/authors/{author_id}/tickets/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="DELETEapi-v1-authors--author_id--tickets--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-authors--author_id--tickets--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-authors--author_id--tickets--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>author_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="author_id"                data-endpoint="DELETEapi-v1-authors--author_id--tickets--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the author. Example: <code>1</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-v1-authors--author_id--tickets--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the ticket. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-v1-authors--author_id--tickets--ticket_id-">PUT api/v1/authors/{author_id}/tickets/{ticket_id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-v1-authors--author_id--tickets--ticket_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://tickets-api.test/api/v1/authors/1/tickets/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"data\": {
        \"attributes\": {
            \"title\": \"quis\",
            \"description\": \"Quos sit natus ipsa aut ipsum.\",
            \"status\": \"C\"
        },
        \"relationships\": {
            \"author\": {
                \"data\": {
                    \"id\": 18
                }
            }
        }
    }
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://tickets-api.test/api/v1/authors/1/tickets/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "data": {
        "attributes": {
            "title": "quis",
            "description": "Quos sit natus ipsa aut ipsum.",
            "status": "C"
        },
        "relationships": {
            "author": {
                "data": {
                    "id": 18
                }
            }
        }
    }
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-authors--author_id--tickets--ticket_id-">
</span>
<span id="execution-results-PUTapi-v1-authors--author_id--tickets--ticket_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-authors--author_id--tickets--ticket_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-authors--author_id--tickets--ticket_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-authors--author_id--tickets--ticket_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-authors--author_id--tickets--ticket_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-authors--author_id--tickets--ticket_id-" data-method="PUT"
      data-path="api/v1/authors/{author_id}/tickets/{ticket_id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-authors--author_id--tickets--ticket_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-authors--author_id--tickets--ticket_id-"
                    onclick="tryItOut('PUTapi-v1-authors--author_id--tickets--ticket_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-authors--author_id--tickets--ticket_id-"
                    onclick="cancelTryOut('PUTapi-v1-authors--author_id--tickets--ticket_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-authors--author_id--tickets--ticket_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/authors/{author_id}/tickets/{ticket_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="PUTapi-v1-authors--author_id--tickets--ticket_id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-authors--author_id--tickets--ticket_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-authors--author_id--tickets--ticket_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>author_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="author_id"                data-endpoint="PUTapi-v1-authors--author_id--tickets--ticket_id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the author. Example: <code>1</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>ticket_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="ticket_id"                data-endpoint="PUTapi-v1-authors--author_id--tickets--ticket_id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the ticket. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>data</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>attributes</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.title"                data-endpoint="PUTapi-v1-authors--author_id--tickets--ticket_id-"
               value="quis"
               data-component="body">
    <br>
<p>Example: <code>quis</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.description"                data-endpoint="PUTapi-v1-authors--author_id--tickets--ticket_id-"
               value="Quos sit natus ipsa aut ipsum."
               data-component="body">
    <br>
<p>Example: <code>Quos sit natus ipsa aut ipsum.</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.status"                data-endpoint="PUTapi-v1-authors--author_id--tickets--ticket_id-"
               value="C"
               data-component="body">
    <br>
<p>Example: <code>C</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>A</code></li> <li><code>C</code></li> <li><code>H</code></li> <li><code>X</code></li></ul>
                    </div>
                                    </details>
        </div>
                                                                    <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>relationships</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style=" margin-left: 28px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>author</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style=" margin-left: 42px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>data</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 56px; clear: unset;">
                        <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="data.relationships.author.data.id"                data-endpoint="PUTapi-v1-authors--author_id--tickets--ticket_id-"
               value="18"
               data-component="body">
    <br>
<p>Example: <code>18</code></p>
                    </div>
                                    </details>
        </div>
                                        </details>
        </div>
                                        </details>
        </div>
                                        </details>
        </div>
        </form>

                    <h2 id="endpoints-PATCHapi-v1-authors--author_id--tickets--ticket_id-">PATCH api/v1/authors/{author_id}/tickets/{ticket_id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PATCHapi-v1-authors--author_id--tickets--ticket_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://tickets-api.test/api/v1/authors/1/tickets/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"data\": {
        \"attributes\": {
            \"title\": \"et\",
            \"description\": \"Quisquam ut animi recusandae neque aspernatur.\",
            \"status\": \"H\"
        },
        \"relationships\": {
            \"author\": {
                \"data\": []
            }
        }
    }
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://tickets-api.test/api/v1/authors/1/tickets/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "data": {
        "attributes": {
            "title": "et",
            "description": "Quisquam ut animi recusandae neque aspernatur.",
            "status": "H"
        },
        "relationships": {
            "author": {
                "data": []
            }
        }
    }
};

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-v1-authors--author_id--tickets--ticket_id-">
</span>
<span id="execution-results-PATCHapi-v1-authors--author_id--tickets--ticket_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-v1-authors--author_id--tickets--ticket_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-v1-authors--author_id--tickets--ticket_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-v1-authors--author_id--tickets--ticket_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-v1-authors--author_id--tickets--ticket_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PATCHapi-v1-authors--author_id--tickets--ticket_id-" data-method="PATCH"
      data-path="api/v1/authors/{author_id}/tickets/{ticket_id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-v1-authors--author_id--tickets--ticket_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-v1-authors--author_id--tickets--ticket_id-"
                    onclick="tryItOut('PATCHapi-v1-authors--author_id--tickets--ticket_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-v1-authors--author_id--tickets--ticket_id-"
                    onclick="cancelTryOut('PATCHapi-v1-authors--author_id--tickets--ticket_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-v1-authors--author_id--tickets--ticket_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/authors/{author_id}/tickets/{ticket_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="PATCHapi-v1-authors--author_id--tickets--ticket_id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PATCHapi-v1-authors--author_id--tickets--ticket_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PATCHapi-v1-authors--author_id--tickets--ticket_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>author_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="author_id"                data-endpoint="PATCHapi-v1-authors--author_id--tickets--ticket_id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the author. Example: <code>1</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>ticket_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="ticket_id"                data-endpoint="PATCHapi-v1-authors--author_id--tickets--ticket_id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the ticket. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>data</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>attributes</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.title"                data-endpoint="PATCHapi-v1-authors--author_id--tickets--ticket_id-"
               value="et"
               data-component="body">
    <br>
<p>Example: <code>et</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.description"                data-endpoint="PATCHapi-v1-authors--author_id--tickets--ticket_id-"
               value="Quisquam ut animi recusandae neque aspernatur."
               data-component="body">
    <br>
<p>Example: <code>Quisquam ut animi recusandae neque aspernatur.</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.status"                data-endpoint="PATCHapi-v1-authors--author_id--tickets--ticket_id-"
               value="H"
               data-component="body">
    <br>
<p>Example: <code>H</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>A</code></li> <li><code>C</code></li> <li><code>H</code></li> <li><code>X</code></li></ul>
                    </div>
                                    </details>
        </div>
                                                                    <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>relationships</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style=" margin-left: 28px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>author</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style=" margin-left: 42px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>data</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 56px; clear: unset;">
                        <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="data.relationships.author.data.id"                data-endpoint="PATCHapi-v1-authors--author_id--tickets--ticket_id-"
               value=""
               data-component="body">
    <br>

                    </div>
                                    </details>
        </div>
                                        </details>
        </div>
                                        </details>
        </div>
                                        </details>
        </div>
        </form>

                <h1 id="managing-tickets">Managing Tickets</h1>

    

                                <h2 id="managing-tickets-GETapi-v1-tickets">Get All Tickets.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-tickets">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://tickets-api.test/api/v1/tickets?sort=sort%3Dtitle%2C-created_at&amp;filter%5Bstatus%5D=nihil&amp;filter%5Btitle%5D=filter%5Btitle%5D%3D%2Afix%2A" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://tickets-api.test/api/v1/tickets"
);

const params = {
    "sort": "sort=title,-created_at",
    "filter[status]": "nihil",
    "filter[title]": "filter[title]=*fix*",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-tickets">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;type&quot;: &quot;ticket&quot;,
            &quot;id&quot;: 103,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;Replace this title 28 - Test 2&quot;,
                &quot;status&quot;: &quot;A&quot;,
                &quot;created_at&quot;: &quot;2024-05-28T21:38:51.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2024-05-28T21:38:51.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;author&quot;: {
                    &quot;data&quot;: {
                        &quot;type&quot;: &quot;user&quot;,
                        &quot;id&quot;: 1
                    },
                    &quot;links&quot;: {
                        &quot;self&quot;: &quot;http://tickets-api.test/api/v1/authors/1&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-api.test/api/v1/tickets/103&quot;
            }
        },
        {
            &quot;type&quot;: &quot;ticket&quot;,
            &quot;id&quot;: 101,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;Replace this title&quot;,
                &quot;status&quot;: &quot;A&quot;,
                &quot;created_at&quot;: &quot;2024-05-28T21:18:59.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2024-05-28T21:18:59.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;author&quot;: {
                    &quot;data&quot;: {
                        &quot;type&quot;: &quot;user&quot;,
                        &quot;id&quot;: 1
                    },
                    &quot;links&quot;: {
                        &quot;self&quot;: &quot;http://tickets-api.test/api/v1/authors/1&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-api.test/api/v1/tickets/101&quot;
            }
        },
        {
            &quot;type&quot;: &quot;ticket&quot;,
            &quot;id&quot;: 3,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;consectetur modi in&quot;,
                &quot;status&quot;: &quot;H&quot;,
                &quot;created_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;author&quot;: {
                    &quot;data&quot;: {
                        &quot;type&quot;: &quot;user&quot;,
                        &quot;id&quot;: 2
                    },
                    &quot;links&quot;: {
                        &quot;self&quot;: &quot;http://tickets-api.test/api/v1/authors/2&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-api.test/api/v1/tickets/3&quot;
            }
        },
        {
            &quot;type&quot;: &quot;ticket&quot;,
            &quot;id&quot;: 4,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;harum similique rerum&quot;,
                &quot;status&quot;: &quot;C&quot;,
                &quot;created_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;author&quot;: {
                    &quot;data&quot;: {
                        &quot;type&quot;: &quot;user&quot;,
                        &quot;id&quot;: 8
                    },
                    &quot;links&quot;: {
                        &quot;self&quot;: &quot;http://tickets-api.test/api/v1/authors/8&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-api.test/api/v1/tickets/4&quot;
            }
        },
        {
            &quot;type&quot;: &quot;ticket&quot;,
            &quot;id&quot;: 5,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;et maiores repellendus&quot;,
                &quot;status&quot;: &quot;X&quot;,
                &quot;created_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;author&quot;: {
                    &quot;data&quot;: {
                        &quot;type&quot;: &quot;user&quot;,
                        &quot;id&quot;: 2
                    },
                    &quot;links&quot;: {
                        &quot;self&quot;: &quot;http://tickets-api.test/api/v1/authors/2&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-api.test/api/v1/tickets/5&quot;
            }
        },
        {
            &quot;type&quot;: &quot;ticket&quot;,
            &quot;id&quot;: 6,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;Changed title 29 may&quot;,
                &quot;status&quot;: &quot;C&quot;,
                &quot;created_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2024-05-29T22:50:36.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;author&quot;: {
                    &quot;data&quot;: {
                        &quot;type&quot;: &quot;user&quot;,
                        &quot;id&quot;: 2
                    },
                    &quot;links&quot;: {
                        &quot;self&quot;: &quot;http://tickets-api.test/api/v1/authors/2&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-api.test/api/v1/tickets/6&quot;
            }
        },
        {
            &quot;type&quot;: &quot;ticket&quot;,
            &quot;id&quot;: 7,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;qui adipisci qui&quot;,
                &quot;status&quot;: &quot;X&quot;,
                &quot;created_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;author&quot;: {
                    &quot;data&quot;: {
                        &quot;type&quot;: &quot;user&quot;,
                        &quot;id&quot;: 8
                    },
                    &quot;links&quot;: {
                        &quot;self&quot;: &quot;http://tickets-api.test/api/v1/authors/8&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-api.test/api/v1/tickets/7&quot;
            }
        },
        {
            &quot;type&quot;: &quot;ticket&quot;,
            &quot;id&quot;: 8,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;dolores voluptas dolorem&quot;,
                &quot;status&quot;: &quot;C&quot;,
                &quot;created_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2024-05-29T22:54:03.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;author&quot;: {
                    &quot;data&quot;: {
                        &quot;type&quot;: &quot;user&quot;,
                        &quot;id&quot;: 3
                    },
                    &quot;links&quot;: {
                        &quot;self&quot;: &quot;http://tickets-api.test/api/v1/authors/3&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-api.test/api/v1/tickets/8&quot;
            }
        },
        {
            &quot;type&quot;: &quot;ticket&quot;,
            &quot;id&quot;: 9,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;repudiandae sunt est&quot;,
                &quot;status&quot;: &quot;X&quot;,
                &quot;created_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;author&quot;: {
                    &quot;data&quot;: {
                        &quot;type&quot;: &quot;user&quot;,
                        &quot;id&quot;: 6
                    },
                    &quot;links&quot;: {
                        &quot;self&quot;: &quot;http://tickets-api.test/api/v1/authors/6&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-api.test/api/v1/tickets/9&quot;
            }
        },
        {
            &quot;type&quot;: &quot;ticket&quot;,
            &quot;id&quot;: 10,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;eveniet architecto recusandae&quot;,
                &quot;status&quot;: &quot;H&quot;,
                &quot;created_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;author&quot;: {
                    &quot;data&quot;: {
                        &quot;type&quot;: &quot;user&quot;,
                        &quot;id&quot;: 8
                    },
                    &quot;links&quot;: {
                        &quot;self&quot;: &quot;http://tickets-api.test/api/v1/authors/8&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-api.test/api/v1/tickets/10&quot;
            }
        },
        {
            &quot;type&quot;: &quot;ticket&quot;,
            &quot;id&quot;: 11,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;recusandae dolore nihil&quot;,
                &quot;status&quot;: &quot;A&quot;,
                &quot;created_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;author&quot;: {
                    &quot;data&quot;: {
                        &quot;type&quot;: &quot;user&quot;,
                        &quot;id&quot;: 5
                    },
                    &quot;links&quot;: {
                        &quot;self&quot;: &quot;http://tickets-api.test/api/v1/authors/5&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-api.test/api/v1/tickets/11&quot;
            }
        },
        {
            &quot;type&quot;: &quot;ticket&quot;,
            &quot;id&quot;: 12,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;odio quia quae&quot;,
                &quot;status&quot;: &quot;H&quot;,
                &quot;created_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;author&quot;: {
                    &quot;data&quot;: {
                        &quot;type&quot;: &quot;user&quot;,
                        &quot;id&quot;: 8
                    },
                    &quot;links&quot;: {
                        &quot;self&quot;: &quot;http://tickets-api.test/api/v1/authors/8&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-api.test/api/v1/tickets/12&quot;
            }
        },
        {
            &quot;type&quot;: &quot;ticket&quot;,
            &quot;id&quot;: 13,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;nisi nobis eaque&quot;,
                &quot;status&quot;: &quot;A&quot;,
                &quot;created_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;author&quot;: {
                    &quot;data&quot;: {
                        &quot;type&quot;: &quot;user&quot;,
                        &quot;id&quot;: 6
                    },
                    &quot;links&quot;: {
                        &quot;self&quot;: &quot;http://tickets-api.test/api/v1/authors/6&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-api.test/api/v1/tickets/13&quot;
            }
        },
        {
            &quot;type&quot;: &quot;ticket&quot;,
            &quot;id&quot;: 14,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;asperiores doloremque qui&quot;,
                &quot;status&quot;: &quot;A&quot;,
                &quot;created_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;author&quot;: {
                    &quot;data&quot;: {
                        &quot;type&quot;: &quot;user&quot;,
                        &quot;id&quot;: 4
                    },
                    &quot;links&quot;: {
                        &quot;self&quot;: &quot;http://tickets-api.test/api/v1/authors/4&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-api.test/api/v1/tickets/14&quot;
            }
        },
        {
            &quot;type&quot;: &quot;ticket&quot;,
            &quot;id&quot;: 15,
            &quot;attributes&quot;: {
                &quot;title&quot;: &quot;odio officiis est&quot;,
                &quot;status&quot;: &quot;A&quot;,
                &quot;created_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2024-05-15T22:36:40.000000Z&quot;
            },
            &quot;relationships&quot;: {
                &quot;author&quot;: {
                    &quot;data&quot;: {
                        &quot;type&quot;: &quot;user&quot;,
                        &quot;id&quot;: 6
                    },
                    &quot;links&quot;: {
                        &quot;self&quot;: &quot;http://tickets-api.test/api/v1/authors/6&quot;
                    }
                }
            },
            &quot;links&quot;: {
                &quot;self&quot;: &quot;http://tickets-api.test/api/v1/tickets/15&quot;
            }
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://tickets-api.test/api/v1/tickets?page=1&quot;,
        &quot;last&quot;: &quot;http://tickets-api.test/api/v1/tickets?page=7&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: &quot;http://tickets-api.test/api/v1/tickets?page=2&quot;
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 7,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://tickets-api.test/api/v1/tickets?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: &quot;http://tickets-api.test/api/v1/tickets?page=2&quot;,
                &quot;label&quot;: &quot;2&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://tickets-api.test/api/v1/tickets?page=3&quot;,
                &quot;label&quot;: &quot;3&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://tickets-api.test/api/v1/tickets?page=4&quot;,
                &quot;label&quot;: &quot;4&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://tickets-api.test/api/v1/tickets?page=5&quot;,
                &quot;label&quot;: &quot;5&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://tickets-api.test/api/v1/tickets?page=6&quot;,
                &quot;label&quot;: &quot;6&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://tickets-api.test/api/v1/tickets?page=7&quot;,
                &quot;label&quot;: &quot;7&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://tickets-api.test/api/v1/tickets?page=2&quot;,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;http://tickets-api.test/api/v1/tickets&quot;,
        &quot;per_page&quot;: 15,
        &quot;to&quot;: 15,
        &quot;total&quot;: 101
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-tickets" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-tickets"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-tickets"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-tickets" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-tickets">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-tickets" data-method="GET"
      data-path="api/v1/tickets"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-tickets', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-tickets"
                    onclick="tryItOut('GETapi-v1-tickets');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-tickets"
                    onclick="cancelTryOut('GETapi-v1-tickets');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-tickets"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/tickets</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-tickets"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-tickets"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-tickets"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>sort</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="sort"                data-endpoint="GETapi-v1-tickets"
               value="sort=title,-created_at"
               data-component="query">
    <br>
<p>Data field(s) to sort by. Separate multiple values with a commas. Denote descending order with a dash (-). Example: <code>sort=title,-created_at</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>filter[status]</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="filter[status]"                data-endpoint="GETapi-v1-tickets"
               value="nihil"
               data-component="query">
    <br>
<p>Filter by status code: A, C, H, X. No example Example: <code>nihil</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>filter[title]</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="filter[title]"                data-endpoint="GETapi-v1-tickets"
               value="filter[title]=*fix*"
               data-component="query">
    <br>
<p>Filter by title. Wildcard search is supported. Example: <code>filter[title]=*fix*</code></p>
            </div>
                </form>

                    <h2 id="managing-tickets-POSTapi-v1-tickets">Create a Ticket.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Create a new Ticket. Users can only create tickets for themselves. Managers can create tickets for other users.</p>

<span id="example-requests-POSTapi-v1-tickets">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://tickets-api.test/api/v1/tickets" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"data\": {
        \"attributes\": {
            \"title\": \"No example\",
            \"description\": \"Quas est qui molestiae est.\",
            \"status\": \"A\"
        },
        \"relationships\": {
            \"author\": {
                \"data\": {
                    \"id\": 0
                }
            }
        }
    }
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://tickets-api.test/api/v1/tickets"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "data": {
        "attributes": {
            "title": "No example",
            "description": "Quas est qui molestiae est.",
            "status": "A"
        },
        "relationships": {
            "author": {
                "data": {
                    "id": 0
                }
            }
        }
    }
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-tickets">
</span>
<span id="execution-results-POSTapi-v1-tickets" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-tickets"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-tickets"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-tickets" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-tickets">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-tickets" data-method="POST"
      data-path="api/v1/tickets"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-tickets', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-tickets"
                    onclick="tryItOut('POSTapi-v1-tickets');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-tickets"
                    onclick="cancelTryOut('POSTapi-v1-tickets');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-tickets"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/tickets</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-tickets"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-tickets"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-tickets"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>data</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>attributes</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.title"                data-endpoint="POSTapi-v1-tickets"
               value="No example"
               data-component="body">
    <br>
<p>The title of the ticket --. Example: <code>No example</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.description"                data-endpoint="POSTapi-v1-tickets"
               value="Quas est qui molestiae est."
               data-component="body">
    <br>
<p>The description of the ticket. Example: <code>Quas est qui molestiae est.</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="data.attributes.status"                data-endpoint="POSTapi-v1-tickets"
               value="A"
               data-component="body">
    <br>
<p>The status of the ticket. Example: <code>A</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>A</code></li> <li><code>C</code></li> <li><code>H</code></li> <li><code>X</code></li></ul>
                    </div>
                                    </details>
        </div>
                                                                    <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>relationships</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style=" margin-left: 28px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>author</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style=" margin-left: 42px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>data</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 56px; clear: unset;">
                        <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="data.relationships.author.data.id"                data-endpoint="POSTapi-v1-tickets"
               value="0"
               data-component="body">
    <br>
<p>The id of the author of the ticket. Must be 13. Example: <code>0</code></p>
                    </div>
                                    </details>
        </div>
                                        </details>
        </div>
                                        </details>
        </div>
                                        </details>
        </div>
        </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
