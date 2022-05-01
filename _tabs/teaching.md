---
layout: page
title: Teaching
icon: fas fa-university
order: 3
---


{% assign HEAD_PREFIX = "h_" %}
{% assign LIST_PREFIX = "l_" %}

{% assign group_index = 0 %}
{% assign posts_of_category = site.categories.teaching %}
{% assign courses = "" | split: "" %}

{% for post in posts_of_category %}
    {% assign course = post.categories[1] %}
    {% if course %}
        {% unless courses contains course %}
            {% assign courses = courses | push: course %}
        {% endunless %}
    {% endif %}
{% endfor %}

{% assign courses = courses | sort %}

{% for course in courses %}

    {% assign offerings = site.categories.[course] %}
    {% assign first_offering = offerings | first %} 
    {% assign semesters = "" | split: "" %}

    {% for offering in offerings %}
        {% assign semester = offering.categories[2] %}

        {% if semester %}
            {% unless semesters contains semester %}
                {% assign semesters = semesters | push: semester %}
            {% endunless %}
        {% endif %}
    {% endfor %}

    {% assign offerings = offerings | sort %}
    {% assign offerings_size = offerings | size %}
    
<div class="card categories">
    <!-- top-category -->
    <div id="{{ HEAD_PREFIX }}{{ group_index }}"
        class="card-header d-flex justify-content-between hide-border-bottom">
        <span>
            <i class="far fa-folder-open fa-fw"></i>
            {{ course }}
        </span>

        <!-- arrow -->
        <a href="#{{ LIST_PREFIX }}{{ group_index }}" data-toggle="collapse"
            aria-expanded="true" aria-label="{{ HEAD_PREFIX }}{{ group_index }}-trigger"
            class="category-trigger hide-border-bottom">
            <i class="fas fa-fw fa-angle-down"></i>
        </a>

    </div> <!-- .card-header -->

    <!-- Sub-categories -->
    <div id="{{ LIST_PREFIX }}{{ group_index }}" class="collapse hide" aria-expanded="true">
        <ul class="list-group">
            {% for offering in offerings %}
                <li class="list-group-item">
                    <i class="far fa-folder fa-fw"></i>
                    <a href="{{ offering.homepage }}" class="ml-1 mr-2">{{ offering.semester }} {{offering.year}}</a>
                </li>
            {% endfor %}
        </ul>
    </div>
</div> <!-- .card -->
{% assign group_index = group_index | plus: 1 %}
{% endfor %}



