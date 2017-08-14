{{ partial('partials/header') }}
{{ partial('partials/nav') }}
{{ partial('partials/stars') }}

<div id='app'>
{% block content %} {% endblock %}
</div>
{% block javascript %} {%endblock %}
{{ partial('partials/footer') }}
