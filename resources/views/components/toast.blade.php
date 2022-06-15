<div x-data="{
		notices: [],
		visible: [],
		add(notice) {
			notice.id = Date.now()
            if (notice.type === 'error') {
                notice.text = '😵 ' + notice.text
            }else if (notice.type === 'warning') {
                notice.text = '⚡ ' + notice.text
            }else if (notice.type === 'info') {
                notice.text = '🔥 ' + notice.text
            }else {
                notice.text = '🔥 ' + notice.text
            }
			this.notices.push(notice)
			this.fire(notice.id)
		},
		fire(id) {
			this.visible.push(this.notices.find(notice => notice.id == id))
			const timeShown = 2000 * this.visible.length
			setTimeout(() => {
				this.remove(id)
			}, timeShown)
		},
		remove(id) {
			const notice = this.visible.find(notice => notice.id == id)
			const index = this.visible.indexOf(notice)
			this.visible.splice(index, 1)
		},
	}">
    <div class="toast-container position-fixed bottom-0 end-0 p-3" x-on:notice.window="add($event.detail)">
        <template x-for="notice of notices" :key="notice.id">
            <div class="toast align-items-center text-white border-0 show" role="alert" aria-live="assertive"
            aria-atomic="true" x-show="visible.includes(notice)">
            <div class="d-flex" x-bind:class="{
				'bg-success': notice.type === 'success',
				'bg-info': notice.type === 'info',
				'bg-warning': notice.type === 'warning',
				'bg-danger': notice.type === 'error',
			 }">
                <div class="toast-body">
                    <span x-text="notice.text"></span>
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto"
                    aria-label="Close" x-on:click.prevent="remove(notice.id)"
                    class="rounded mb-4 mr-6 w-56  h-16 flex items-center justify-center text-white shadow-lg font-bold text-lg cursor-pointer"></button>
            </div>
        </div>
        </template>
    </div>
</div>
