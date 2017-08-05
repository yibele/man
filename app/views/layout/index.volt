{{ partial('partials/header') }}
{{ partial('partials/nav') }}
{{ partial('partials/stars') }}

<div id='app'>
{% block content %} {% endblock %}
</div>

{{ partial('partials/footer') }}
