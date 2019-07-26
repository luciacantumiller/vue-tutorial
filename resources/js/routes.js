import Logo from './components/Logo';
import LogoSymbol from './components/LogoSymbol';
import Colors from './components/Colors';
import Typography from './components/Typography';
import Mascot from './components/Mascot';
import Illustrations from './components/Illustrations';
import LoadersAndAnimations from './components/LoadersAndAnimations';
import Wallpapers from './components/Wallpapers';
import NotFound from './components/NotFound';

export default{
    mode: 'history',

    linkActiveClass: 'font-bold',

    routes: [
        {
            path: '*', 
            component: NotFound
        },
        {
            path: '/', 
            component: Logo
        },
        {
            path: '/LogoSymbol', 
            component: LogoSymbol
        },
        {
            path: '/Colors', 
            component: Colors
        },
        {
            path: '/Typography', 
            component: Typography
        },
        {
            path: '/Mascot', 
            component: Mascot
        },
        {
            path: '/Illustrations', 
            component: Illustrations
        },
        {
            path: '/LoadersAndAnimations', 
            component: LoadersAndAnimations
        },
        {
            path: '/Wallpapers', 
            component: Wallpapers
        }
    ]

};