<template>
    <li class="ui-select-option" :class="classes">
        <slot>
            <div class="ui-select-option__basic" v-if="type === 'basic'">
                {{ option[keys.label] || option }}
            </div>

            <div class="ui-select-option__image" v-if="type === 'image'">
                <div class="ui-select-option__image-object">
                  <div class="ui-select-option__bg" :style="imageStyle"></div>
                </div>

                <div
                    class="ui-select-option__image-text"
                >{{ option[keys.label] }}</div>
            </div>

            <div class="ui-select-option__checkbox" v-if="multiple">
                <ui-icon v-if="selected">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M9.984 17.016l9-9-1.406-1.453-7.594 7.594-3.563-3.563L5.016 12zm9-14.016C20.11 3 21 3.938 21 5.016v13.97C21 20.062 20.11 21 18.984 21H5.014C3.89 21 3 20.064 3 18.986V5.015C3 3.94 3.89 3 5.014 3h13.97z"/>
                    </svg>
                </ui-icon>

                <ui-icon v-else>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M18.984 3C20.062 3 21 3.938 21 5.016v13.97C21 20.062 20.062 21 18.984 21H5.014C3.938 21 3 20.064 3 18.986V5.015C3 3.94 3.936 3 5.014 3h13.97zm0 2.016H5.014v13.97h13.97V5.015z"/>
                    </svg>
                </ui-icon>
            </div>
        </slot>
    </li>
</template>

<script>
  import UiIcon from './UiIcon.vue'

  export default {
    name: 'ui-select-option',

    props: {
      option: {
        type: [String, Object],
        required: true
      },
      type: {
        type: String,
        default: 'basic' // 'basic' or 'image'
      },
      multiple: {
        type: Boolean,
        default: false
      },
      highlighted: {
        type: Boolean,
        default: false
      },
      selected: {
        type: Boolean,
        default: false
      },
      keys: {
        type: Object,
        default () {
          return {
            label: 'label',
            image: 'image'
          }
        }
      }
    },
    computed: {
      classes () {
        return [
          `ui-select-option--type-${this.type}`,
          { 'is-highlighted': this.highlighted },
          { 'is-selected': this.selected }
        ]
      },

      imageStyle () {
        return { 'background-image': 'url(' + this.option[this.keys.image] + ')' }
      }
    },
    components: {
      UiIcon
    }
  }
</script>

<style lang="scss">
@import './styles/imports';

$ui-select-option-checkbox-color: rgba(black, 0.38) !default;

.ui-select-option {
    align-items: center;
    cursor: pointer;
    display: flex;
    font-size: $ui-dropdown-item-font-size;
    user-select: none;

    &.is-selected {
        background-color: rgba(black, 0.05);
        color: #00A63B;
        font-weight: 500;

        .ui-select-option__checkbox {
            color: $brand-primary-color;
        }
    }

    &.is-highlighted {
        background-color: rgba(black, 0.1);
    }
}

.ui-select-option__basic,
.ui-select-option__image-text {
    @include text-truncation;
}

.ui-select-option__image {
    display: flex;
    align-items: center;
}

.ui-select-option__image-object {
    background-position: 50%;
    padding: 3px;
    background-size: cover;
    // border-radius: 50%;
    border-radius: 6px;
    background-color: #00A63B;
    height: rem-calc(32px);
    margin-right: rem-calc(12px);
    width: rem-calc(32px);
}
.ui-select-option__bg{
  width: 26px;
  height: 26px;
  display: block;
  background: {
    position: center;
    size: contain;
    repeat: no-repeat;
  };
}

.ui-select-option__checkbox {
    color: $ui-select-option-checkbox-color;
    margin-left: auto;
}

// ================================================
// Types
// ================================================

.ui-select-option--type-basic {
    padding: rem-calc(6px 12px);
}

.ui-select-option--type-image {
    padding: rem-calc(4px 12px);
}
</style>
