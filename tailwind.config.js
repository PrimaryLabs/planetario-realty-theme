/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './*.php',
    './template-parts/**/*.php',
    './resources/js/**/*.js',
  ],
  theme: {
    extend: {
      borderRadius: {
        DEFAULT: '0.75rem',
        lg: '0.75rem',
        xl: '1rem',
        '2xl': '1.25rem',
        '3xl': '1.5rem',
      },
      colors: {
        background: 'oklch(98.5% 0.005 240)',
        foreground: 'oklch(18% 0.04 256)',
        border: 'oklch(90% 0.012 240)',
        input: 'oklch(92% 0.012 240)',
        card: 'oklch(100% 0 0)',
        popover: 'oklch(100% 0 0)',
        primary: 'oklch(20% 0.06 256)',
        secondary: 'oklch(95% 0.012 240)',
        muted: 'oklch(95% 0.008 240)',
        'muted-foreground': 'oklch(45% 0.025 250)',
        accent: 'oklch(55% 0.14 152)',
        ring: 'oklch(55% 0.14 152)',
        navy: {
          deep: 'oklch(20% 0.06 256)',
          DEFAULT: 'oklch(31% 0.07 258)',
        },
        emerald: {
          DEFAULT: 'oklch(55% 0.14 152)',
          soft: 'oklch(82% 0.08 152)',
          dark: 'oklch(45% 0.13 165)',
        },
        sand: 'oklch(97% 0.01 90)',
        ink: 'oklch(18% 0.04 256)',
        chart: {
          1: 'oklch(20% 0.06 256)',
          2: 'oklch(31% 0.07 258)',
          3: 'oklch(55% 0.14 152)',
          4: 'oklch(82% 0.08 152)',
          5: 'oklch(70% 0.04 240)',
        },
      },
      fontFamily: {
        sans: ['Manrope', 'ui-sans-serif', 'system-ui', 'sans-serif'],
        mono: ['ui-monospace', 'SFMono-Regular', 'Menlo', 'Monaco', 'Consolas', '"Liberation Mono"', '"Courier New"', 'monospace'],
        display: ['Sora', 'ui-sans-serif', 'system-ui', 'sans-serif'],
      },
      maxWidth: {
        sm: '24rem',
        md: '28rem',
        lg: '32rem',
        xl: '36rem',
        '2xl': '42rem',
        '3xl': '48rem',
        '4xl': '56rem',
        '7xl': '80rem',
      },
      boxShadow: {
        soft: '0 1px 2px oklch(20% 0.06 256 / .06), 0 8px 24px oklch(20% 0.06 256 / .06)',
        elevated: '0 4px 12px oklch(20% 0.06 256 / .08), 0 24px 48px oklch(20% 0.06 256 / .12)',
        emerald: '0 8px 30px oklch(55% 0.14 152 / .25)',
      },
      transitionTimingFunction: {
        'in-out': 'cubic-bezier(.4, 0, .2, 1)',
      },
    },
  },
  plugins: [],
};
