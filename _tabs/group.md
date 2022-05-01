---
layout: home
title: group
icon: fas fa-users
order: 2
---

<h1 style="text-align:center">Current Research group Members</h1>

<h2 style="text-align:center">PhD</h2>

<div class="row">
{% for member in site.categories.group %}
    {% if member.categories contains "Current" and member.categories contains "PhD"%}
        <div class="col-md-3 col-sm-3 col-xs-6" style="text-align:center">
            <a href="{{member.homepage}}" target="_blank">
                {% if member.image.path %}
                    <img src="{{ site.baseurl }}/{{ member.image.path }}" class="img-responsive img-hover" width="200" height="200"><br>
                {% endif %}
                <b>{{ member.title }}</b><br><br>
            </a>

        </div> <!-- col -->

    {% endif %}
{% endfor %}
</div> <!-- row -->



<hr width="25%" color="red">

<h1 style="text-align:center">Alumni</h1>

<h2 style="text-align:center">PhD</h2>

<div class="row">
{% for member in site.categories.group %}
    {% if member.categories contains "Alumni" and member.categories contains "PhD"%}
        <div class="col-md-3 col-sm-3 col-xs-6" style="text-align:center">
            <a href="{{member.homepage}}" target="_blank">
                {% if member.image.path %}
                    <img src="{{ site.baseurl }}/{{ member.image.path }}" class="img-responsive img-hover" width="200" height="200"><br>
                {% endif %}
                <b>{{ member.title }}</b><br>
            </a>

            <a href="{{member.thesis_url}}" target="_blank">{{member.thesis_title}}</a><br> 
            {%- comment -%} ({{member.date | date: "%m/%y"}})<br> {%- endcomment -%}
            {{member.job}}<br><br>

        </div> <!-- col -->

    {% endif %}
{% endfor %}
</div> <!-- row -->


<h2 style="text-align:center">Masters</h2>

<div class="row">
{% for member in site.categories.group %}
    {% if member.categories contains "Alumni" and member.categories contains "Masters"%}
        <div class="col-md-3 col-sm-3 col-xs-6" style="text-align:center">
            <a href="{{member.homepage}}" target="_blank">
                {% if member.image.path %}
                    <img src="{{ site.baseurl }}/{{ member.image.path }}" class="img-responsive img-hover" width="200" height="200"><br>
                {% endif %}
                <b>{{ member.title }}</b><br>
            </a>

            <a href="{{member.thesis_url}}" target="_blank">{{member.thesis_title}}</a><br> 
            {%- comment -%} ({{member.date | date: "%m/%y"}})<br> {%- endcomment -%}
            {{member.job}}<br><br>

        </div> <!-- col -->

    {% endif %}
{% endfor %}
</div> <!-- row -->

<h2 style="text-align:center">Undergraduates</h2>

<div class="row">
{% for member in site.categories.group %}
    {% if member.categories contains "Alumni" and member.categories contains "Masters"%}
        <div class="col-md-3 col-sm-3 col-xs-6" style="text-align:center">
            <a href="{{member.homepage}}" target="_blank">
                {% if member.image.path %}
                    <img src="{{ site.baseurl }}/{{ member.image.path }}" class="img-responsive img-hover" width="200" height="200"><br>
                {% endif %}
                <b>{{ member.title }}</b><br>
            </a>

            <a href="{{member.thesis_url}}" target="_blank">{{member.thesis_title}}</a><br> 
            {%- comment -%} ({{member.date | date: "%m/%y"}})<br> {%- endcomment -%}
            {{member.job}}<br><br>

        </div> <!-- col -->

    {% endif %}
{% endfor %}
</div> <!-- row -->

