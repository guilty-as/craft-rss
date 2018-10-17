Craft RSS for Craft 3.x
=====
 
Craft RSS is a simple helper plugin that lets you pull down an RSS feed and use it in your Twig templates.

## Requirements

This plugin requires Craft CMS 3.0.0-beta.23 or later.

## Installation

To install the plugin, follow these instructions.

1. Open your terminal and go to your Craft project:

```
cd /path/to/project
```


2. Then tell Composer to load the plugin:

```
composer require guilty/craft-rss
```

3. In the Control Panel, go to Settings → Plugins and click the “Install” button for Craft RSS.


## Configuring Craft RSS
 
No configuration needed.

## Using Craft RSS

```twig

{% set blogFeed = craft.rss.loadRss("https://helgesverre.com/blog/feed/") %}

{% if blogFeed %}

    <h1>{{ blogFeed.title }}</h1>
    <a href="{{ blogFeed.link }}">{{ blogFeed.link }}</a>

    <ul>
        {% for post in blogFeed.item %}
            <li>
                <a href="{{ post.link }}">
                    {{ post.title }} - {{ post.pubDate }}
                </a>
            </li>
        {% endfor %}
    </ul>
{% endif %}

```

Brought to you by [Guilty AS](https://guilty.no)