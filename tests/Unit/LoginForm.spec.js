import { mount } from '@vue/test-utils';
import LoginForm from '@/Pages/Auth/Login.vue';

describe('LoginForm', () => {
  test('renders the login form', () => {
    const wrapper = mount(LoginForm);

    expect(wrapper.find('input[type="email"]').exists()).toBe(true);
    expect(wrapper.find('input[type="password"]').exists()).toBe(true);
  });

  test('submits the login form with correct data', async () => {
    const mockRouter = { visit: jest.fn() };
    const wrapper = mount(LoginForm, {
      global: {
        mocks: {
          $inertia: mockRouter,
        },
      },
    });

    await wrapper.find('input[type="email"]').setValue('user@example.com');
    await wrapper.find('input[type="password"]').setValue('password');
    await wrapper.find('form').trigger('submit.prevent');

    expect(mockRouter.visit).toHaveBeenCalledWith(expect.stringContaining('/login'), expect.any(Object));
  });
});
