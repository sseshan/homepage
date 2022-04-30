---
layout: page
title: Group
icon: fas fa-tag
order: 2
---

<h2>Alumni</h2>

<div id="post-list">

<h3>PhD</h3>
{% for paper in site.categories.Group %}
    {% if paper.categories contains "Alumni" and paper.categories contains "PhD"%}
    <div class="post-preview">
    {% if paper.image.path %}
        <img src="{{ paper.image.path }}" class="preview-img {{ bg | strip }}"
            alt="{{ paper.image.alt | default: "Preview Image" }}"
            {% if paper.image.width %}
                width="{{ paper.image.width }}"
            {% endif %}
            {% if paper.image.height %}
                height="{{ paper.image.height }}"
            {% endif %}>
    {% endif %}
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

{% endif %}
{% endfor %}
</div> <!-- #post-list -->


<div id="post-list">
<h3>Masters</h3>
{% for paper in site.categories.Group %}
   {% if paper.categories contains "Alumni" and paper.categories contains "Masters"%}
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

{% endif %}
{% endfor %}
</div> <!-- #post-list -->
