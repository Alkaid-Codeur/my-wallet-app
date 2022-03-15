const { transform } = require("lodash")

module.exports = {
	content: [
	"./resources/**/*.blade.php",
	"./resources/**/*.js",
	],
	theme: {
		extend: {
			boxShadow: {
				'spe-1': '0px 22px 68px -9px rgb(0 0 0 / 15%)',
			},
			colors: {
				special: {
					100: '#3dcdbc',
					150: '#33a1bd',
					200: '#4d4d4d',
					250: '#00ffa3',
					300: '#239c71',
					350: '#898989',
					400: '#1a1a1a',
					450: '#777',
					500: '#17B794',
				}
			},
			keyframes: {
				wiggle: {
					'from': {
						transform: 'translateY(40px)',
						opacity: 0
					},
					'to': {
						transform: 'translateY(0)',
						opacity: 1
					}
				},

				navdisplay: {
					'from': {
						transform: 'translateX(100%)',
						opacity: 0
					},
					'to': {
						transform: 'translateX(0)',
						opacity: 1
					}
				},
				navhide: {
					'from': {
						transform: 'translateX(0)',
						opacity: 1
					},
					'to': {
						transform: 'translateX(100%)',
						opacity: 0
					}
				}
			},
			animation: {
				wiggle: 'wiggle .7s ease-in-out',
				navdisplay: 'navdisplay 1s ease-in-out',
				navhide: 'navhide 1s ease-in-out',
			},
			screens: {
				'sd': '425px',
			},
		},
	},
	plugins: [require('@tailwindcss/forms')],
	purge: [
		'./storage/framework/views/*.php',
		'./resources/**/*.blade.php',
		'./resources/**/*.js',
		'./resources/**/*.vue',
	],
}
