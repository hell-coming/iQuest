import { defineStore } from 'pinia'
import type { Holiday } from '../../types/models/holiday'
import { api } from '#/utils/api'

//* --- State ----------------------------------------------- *//
interface HolidayState {
  holiday: Holiday | null
  error: unknown
}

//* --- Store ----------------------------------------------- *//
export const useHolidayStore = defineStore('holiday', {
  state: (): HolidayState => ({
    holiday: null,
    error: {},
  }),
  actions: {
    async fetchHoliday(id: string) {
      try {
        const response = await api.holidays.getHoliday(id, {
          include: ['packages'],
          filter: {
            is_active: true,
          },
        })
        this.holiday = response.data.data
      }
      catch (error) {
        this.error = error
      }
    },
  },
})
