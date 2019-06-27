import Logo from './components/Logo';
import LogoSymbol from './components/LogoSymbol';
import Colors from './components/Colors';
import Typography from './components/Typography';
import Mascot from './components/Mascot';
import Illustrations from './components/Illustrations';
import LoadersAndAnimations from './components/LoadersAndAnimations';
import Wallpapers from './components/Wallpapers';
import NotFound from './components/NotFound';
import SiteStats from './components/SiteStats';

export default {
    mode: 'history',
    linkActiveClass: 'font-bold',
    routes: [
        {
            path: '*',
            component: NotFound
        },
        {
            path: '/',
            component: Logo,
            name: 'Logo'
        },
        {
            path: '/logo-symbol',
            component: LogoSymbol,
            name: 'LogoSymbol'
        },
        {
            path: '/colors',
            component: Colors,
            name: 'Colors'
        },
        {
            path: '/typography',
            component: Typography,
            name: 'Typography'
        },
        {
            path: '/mascot',
            component: Mascot,
            name: 'Mascot'
        },
        {
            path: '/illustrations',
            component: Illustrations,
            name: 'Illustrations'
        },
        {
            path: '/loaders-and-animations',
            component: LoadersAndAnimations,
            name: 'LoadersAndAnimations'
        },
        {
            path: '/wallpapers',
            component: Wallpapers,
            name: 'Wallpapers'
        },
        {
            path: '/site-stats',
            component: SiteStats,
            name: 'SiteStats'
        }
    ]
}
