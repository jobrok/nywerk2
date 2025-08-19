import './bootstrap'
import Alpine from 'alpinejs'
import sort from '@alpinejs/sort'

window.Alpine = Alpine

Alpine.plugin(sort)

Alpine.store('globalState', {
    open: true,
});

Alpine.store('app', {
    currentId: 200,
    setId(id) {
        this.currentId = id;
    }
});

Alpine.start()
