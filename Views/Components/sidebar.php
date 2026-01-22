<div class="sidebar">
    <h3>Exercices</h3>

    <div class="exercise-group">
        <h4 onclick="toggleCategory(this)">Facile</h4>
        <ul class="exercise-list">
            <li><a href="/conversion1" class="done">Conversion décimal → binaire</a></li>
            <li><a href="/changer-les-unites" class="done">Changer les unités</a></li>
            <li><a href="/diviseurs-premiers" class="done">Diviseurs premiers</a></li>
        </ul>
    </div>
</div>
</div>

<script>
    function toggleCategory(element) {
        var list = element.nextElementSibling;
        list.classList.toggle('hidden');
        element.classList.toggle('closed');
    }
</script>