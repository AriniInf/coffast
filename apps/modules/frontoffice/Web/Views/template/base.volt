<!DOCTYPE html>
<html>

<head>
    {% include 'template/header.volt' %} {% block additional_header %}{% endblock %}
    <title>Coffast - {% block title %}{% endblock %}</title>
</head>

<body>

    {% if session.has('auth') %} {% include "template/navses.volt" %} {% else %} {% include "template/nav.volt" %} {% endif %} {% block content %}{% endblock %}


</body>

</html>