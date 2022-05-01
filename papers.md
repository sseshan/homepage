---
layout: page
title: Papers
icon: fas fa-book
order: 1
---

<div id="post-list">

{% for paper in site.categories.papers %}

  <div class="post-preview">
    <b>
      <a href="{{ paper.url | relative_url }}">{{ paper.title }}</a>
    </b>

    <div class="post-content">
      <p>
        {% include no-linenos.html content=paper.content %}
        {{ content | markdownify | strip_html | truncate: 200 | escape }}
      </p>
    </div>

  </div> <!-- .post-review -->

{% endfor %}
</div> <!-- #post-list -->
