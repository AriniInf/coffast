<!DOCTYPE html>
<html>

<head>
    {% include 'template/header.volt' %} {% block additional_header %}{% endblock %}
    <title>Coffast</title>
</head>

<body>

    {% if session.has('auth') %} {% include "template/with_session.volt" %} {% else %} {% include "template/without.volt" %} {% endif %} {% block content %}{% endblock %} {% include 'template/footer.volt' %}
</body>

</html>