<template>
    <div>
        <CRow>
            <CCol md=12>
                <CCard>                    
                    <CCardHeader>
                        <h2>Lista de Clientes</h2>
                    </CCardHeader>

                    <CCardBody>
                        <CRow class="card-option-table">
                            <CCol md="12 mb-4" class="text-left">
                                <CButton size="" class="btn-outline-primary" @click="navigate('/cliente/criar')">
                                    Cadastrar novo <CIcon :content="freeSet.cilPlus" size="lg" style="margin:0!important" />
                                </CButton>
                            </CCol>
                            <CCol md="6" class="text-left form-inline" style="margin-bottom: 15px">
                                <CInput
                                    label="Buscar : "
                                    :horizontal="true"
                                    placeholder="Digite a sua busca"
                                    type="text"
                                    autocomplete="off"
                                />
                                <CButton size="" class="btn-outline-primary" style="margin-left:1vw !important">
                                    <CIcon :content="freeSet.cilMagnifyingGlass" size="lg" style="margin-left:0!important" />
                                </CButton>
                            </CCol>
                            <CCol md="6" class="select-page-div form-inline justify-content-sm-end">
                                <CSelect
                                    label="Itens por página:"
                                />
                            </CCol>
                        </CRow>
                        <CDataTable
                                hover
                                sorter
                                :pagination="false"
                            >
                                <!-- <template>
                                    <td>
                                        <CBadge :color="getBadge(item.Inativo)">
                                            <span>{{getBadgeText(item.Inativo)}}</span>
                                        </CBadge>
                                    </td>
                                </template> -->
                                <template> 
                                    <td class="py-2">
                                        <CButton
                                            color="primary"
                                            variant="outline"
                                            square
                                            size="sm"
                                            @click="navigate('/cliente/')"
                                        >
                                            <CIcon size="lg" style="margin:0!important" /> 
                                        </CButton>
                                    </td>
                                </template>
                            </CDataTable>
                            <CPagination
                                size=""
                                align="center"
                            />
                    </CCardBody>
                </CCard>
            </CCol>
        </CRow>
    </div>
</template>

<script>
import { freeSet } from '@coreui/icons';
export default {
    data(){
        return{
            freeSet,
        }
    },
    name: 'clienteList',
    methods:{
        navigate(route) {
            this.$router.push(route);
        },
    },
};
</script>

<style>
</style>