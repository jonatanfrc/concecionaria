export default [
  {
    _name: 'CSidebarNav',
    _children: [
      {
        _name: 'CSidebarNavItem',
        name: 'Menu',
        to: '/dashboard',
        icon: 'cil-menu',
      },
      {
        _name: 'CSidebarNavTitle',
        _children: ['Listas']
      },
      {
        _name: 'CSidebarNavItem',
        name: 'Clientes',
        to: '/theme/colors',
        icon: 'cil-user'
      },
      {
        _name: 'CSidebarNavItem',
        name: 'Veículos',
        to: '/theme/colors',
        icon: 'cil-car-alt'
      },
      {
        _name: 'CSidebarNavItem',
        name: 'Vendedores',
        to: '/theme/colors',
        icon: 'cil-tag'
      },
      {
        _name: 'CSidebarNavItem',
        name: 'Vendas',
        to: '/theme/colors',
        icon: 'cil-wallet'
      },
      {
        _name: 'CSidebarNavDropdown',
        name: 'Pages',
        route: '/pages',
        icon: 'cil-star',
        items: [
          {
            name: 'Login',
            to: '/pages/login'
          },
          {
            name: 'Register',
            to: '/pages/register'
          },
          {
            name: 'Error 404',
            to: '/pages/404'
          },
          {
            name: 'Error 500',
            to: '/pages/500'
          }
        ]
      },
      
    ]
  }
]