---
layout: home
title: Group
icon: fas fa-users
order: 2
---

<h1 style="text-align:center">Current Research Group Members</h1>

<h2 style="text-align:center">PhD</h2>

<div class="row">
{% for paper in site.categories.Group %}
    {% if paper.categories contains "Current" and paper.categories contains "PhD"%}
        <div class="col-md-3 col-sm-3 col-xs-6" style="text-align:center">
            <a href="{{paper.homepage}}" target="_blank">
                {% if paper.image.path %}
                    <img src="{{ paper.image.path }}" class="img-responsive img-hover" width="200" height="200"><br>
                {% endif %}
                <b>{{ paper.title }}</b><br>
            </a>

        </div> <!-- col -->

    {% endif %}
{% endfor %}
</div> <!-- row -->



<hr width="25%" color="red">

<h1 style="text-align:center">Alumni</h1>

<h2 style="text-align:center">PhD</h2>

<div class="row">
{% for paper in site.categories.Group %}
    {% if paper.categories contains "Alumni" and paper.categories contains "PhD"%}
        <div class="col-md-3 col-sm-3 col-xs-6" style="text-align:center">
            <a href="{{paper.homepage}}" target="_blank">
                {% if paper.image.path %}
                    <img src="{{ paper.image.path }}" class="img-responsive img-hover" width="200" height="200"><br>
                {% endif %}
                <b>{{ paper.title }}</b><br>
            </a>

            <a href="{{paper.thesis_url}}" target="_blank">{{paper.thesis_title}}</a><br> 
            {%- comment -%} ({{paper.date | date: "%m/%y"}})<br> {%- endcomment -%}
            {{paper.job}}

        </div> <!-- col -->

    {% endif %}
{% endfor %}
</div> <!-- row -->


<h2 style="text-align:center">Masters</h2>

<div class="row">
{% for paper in site.categories.Group %}
    {% if paper.categories contains "Alumni" and paper.categories contains "Masters"%}
        <div class="col-md-3 col-sm-3 col-xs-6" style="text-align:center">
            <a href="{{paper.homepage}}" target="_blank">
                {% if paper.image.path %}
                    <img src="{{ paper.image.path }}" class="img-responsive img-hover" width="200" height="200"><br>
                {% endif %}
                <b>{{ paper.title }}</b><br>
            </a>

            <a href="{{paper.thesis_url}}" target="_blank">{{paper.thesis_title}}</a><br> 
            {%- comment -%} ({{paper.date | date: "%m/%y"}})<br> {%- endcomment -%}
            {{paper.job}}

        </div> <!-- col -->

    {% endif %}
{% endfor %}
</div> <!-- row -->

<h2 style="text-align:center">Undergraduates</h2>

<div class="row">
{% for paper in site.categories.Group %}
    {% if paper.categories contains "Alumni" and paper.categories contains "Masters"%}
        <div class="col-md-3 col-sm-3 col-xs-6" style="text-align:center">
            <a href="{{paper.homepage}}" target="_blank">
                {% if paper.image.path %}
                    <img src="{{ paper.image.path }}" class="img-responsive img-hover" width="200" height="200"><br>
                {% endif %}
                <b>{{ paper.title }}</b><br>
            </a>

            <a href="{{paper.thesis_url}}" target="_blank">{{paper.thesis_title}}</a><br> 
            {%- comment -%} ({{paper.date | date: "%m/%y"}})<br> {%- endcomment -%}
            {{paper.job}}

        </div> <!-- col -->

    {% endif %}
{% endfor %}
</div> <!-- row -->

