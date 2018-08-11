import './bootstrap'

import UiButton from './UiButton.vue'
// import UiIconButton from './UiIconButton.vue'
import UiCheckbox from './UiCheckbox.vue'
import UiModal from './UiModal.vue'
import UiCollapsible from './UiCollapsible.vue'
import UiProgressCircular from './UiProgressCircular.vue'
import UiProgressLinear from './UiProgressLinear.vue'
import UiSelect from './UiSelect.vue'
import UiTextbox from './UiTextbox.vue'

const Keen = {
  UiButton,
  // UiIconButton,
  UiCheckbox,
  UiModal,
  UiCollapsible,
  UiProgressCircular,
  UiProgressLinear,
  UiSelect,
  UiTextbox,
  install (Vue) {
    Vue.component('ui-button', UiButton)
    // Vue.component('ui-icon-button', UiIconButton)
    Vue.component('ui-checkbox', UiCheckbox)
    Vue.component('ui-collapsible', UiCollapsible)
    Vue.component('ui-modal', UiModal)
    Vue.component('ui-progress-circular', UiProgressCircular)
    Vue.component('ui-progress-linear', UiProgressLinear)
    Vue.component('ui-select', UiSelect)
    Vue.component('ui-textbox', UiTextbox)
  }
}

// Automatically install Keen UI if Vue is available globally
if (typeof window !== 'undefined' && window.Vue) {
  window.Vue.use(Keen)
}

export default Keen

export { UiButton }
// export { UiIconButton }
export { UiCheckbox }
export { UiModal }
export { UiCollapsible }
export { UiProgressCircular }
export { UiSelect }
export { UiProgressLinear }
export { UiTextbox }
