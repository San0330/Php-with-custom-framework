{% extends "./layouts/main.html" %}
{% block title %} Contact Us {% endblock %}

{% block content %}
<h1>Contact Us</h1>
<div class="row">
    <div class="col-6 m-auto">
        <form method="POST" action="">
            <div class="mb-3">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" class="form-control" name="subject">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
{% endblock %}