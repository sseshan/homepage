---
layout: page
title: Papers
icon: fas fa-book
order: 1
---

<h2><a href="https://scholar.google.com/citations?user=0irVeiQAAAAJ&hl=en&oi=ao"> Google Scholar Link</a></h2>

{% assign prev_year = 3000 %}

<div id="post-list">

{% for paper in site.categories.papers %}

  {% capture this_year %}{{ paper.date | date: "%Y" }}{% endcapture %}
  {% if this_year != prev_year %}
    <h2> {{this_year}} </h2>
  {% endif %}

  <div class="post-preview">
    <b>
      {{ paper.title }} <br>
    </b>
    {{paper.venue}}<br>
    {{paper.authors}}<br>
    {% if paper.award %} <b>{{ paper.award }}</b> <br> {% endif %}
    {% if paper.webpage %} <a href="{{ paper.webpage }}">Official Site</a>&nbsp;&nbsp; {%endif %}
    {% if paper.localpdf %} <a href="{{ paper.localpdf }}">Paper (PDF)</a>&nbsp;&nbsp; {%endif %}
    {% if paper.localslides %} <a href="{{ paper.localslides }}">Slides (PDF)</a>&nbsp;&nbsp; {%endif %}
    {% if paper.localppt %} <a href="{{ paper.localppt }}">Slides (PPT)</a>&nbsp;&nbsp; {%endif %}
    {% if paper.video %} <a href="{{ paper.video }}">Video</a>&nbsp;&nbsp; {%endif %}
    {% if paper.github %} <a href="{{ paper.github }}">GitHub</a>&nbsp;&nbsp; {%endif %}

    <a href="{{ paper.url | relative_url }}">Bibtex</a><br>

  </div> <!-- .post-review -->

  {% capture prev_year %}{{ paper.date | date: "%Y" }}{% endcapture %}

{% endfor %}
</div> <!-- #post-list -->
